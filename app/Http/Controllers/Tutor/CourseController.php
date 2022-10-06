<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Discount;
use App\Models\Lesson;
use App\Models\LessonGroup;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function renderNewCourse()
    {
        $data = CourseType::all();
        $discount = Discount::all();
        return view('tutors.newClass', compact('data', 'discount'));
    }

    /**
     * To store new Class
     *
     * @param  mixed $request
     * @return void
     */
    public function storeNewCourse(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'type' => 'required',
            'price' => 'required',
            'cover' => 'required|mimes:jpeg,png,jpg',
        ]);

        $data = $request->all();

        $imageName = str_replace(' ', '-', $data['title']);
        $imagePath = $request->file('cover')->store('/public/' . 'course/' . $imageName . '/cover');
        $imagePath = str_replace('public/', '', $imagePath);

        $photo = Photo::create([
            'types' => 'Course Cover',
            'imageURL' => $imagePath,
        ]);

        Course::create([
            'title' => $data['title'],
            'description' => $data['subtitle'],
            'coverID' => $photo->id,
            'courseTypeID' => $data['type'],
            'creatorID' => Auth::user()->id,
            'price' => $data['price'],
            'discountID' => $data['discountID']
        ]);

        return redirect()->route('tutor.dashboard')->with('success', 'A new Class has successfully created!');
    }

    /**
     * To store new Class Type
     *
     * @param  mixed $request
     * @return void
     */
    public function storeNewType(Request $request)
    {
        $request->validate([
            'type' => 'required'
        ]);

        CourseType::create([
            'name' => $request->type,
        ]);

        return redirect()->back()->with('success', 'A new Class Type has successfully created!');
    }

    /**
     * storeNewDiscount
     *
     * @param  mixed $request
     * @return void
     */
    public function storeNewDiscount(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
            'discount' => 'required|numeric|min:1|max:100'
        ]);

        Discount::create([
            'token' => $request->token,
            'discounts' => $request->discount,
        ]);

        return redirect()->back()->with('success', 'A new Discount has successfully created!');
    }

    /**
     * editCourse
     *
     * @param  mixed $request
     * @return void
     */
    public function editCourse(Request $request)
    {
        $request->validate([
            'courseID' => 'required',
        ]);

        $data = $request->all();
        $course = Course::find($data['courseID']);
        if ($data['title'])
            $course->title = $data['title'];
        if ($data['subtitle'])
            $course->description = $data['subtitle'];
        if ($data['type'])
            $course->courseTypeID = $data['type'];
        if ($data['price'])
            $course->price = $data['price'];
        if ($data['discountID']) {
            $course->discountID = $data['discountID'];
        }
        if ($request->cover) {
            $imageName = str_replace(' ', '-', $data['title']);
            $imagePath = $request->file('cover')->store('/public/' . 'course/' . $imageName . '/cover');
            $imagePath = str_replace('public/', '', $imagePath);
            $photo = Photo::where('id', $course->coverID)->update([
                'imageURL' => $imagePath,
            ]);
        }
        $course->save();

        return redirect()->back()->with('success', $course->title . ' has been updated successfully!');
    }

    /**
     * deleteCourse
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteCourse($id)
    {
        $course = Course::find($id);
        Course::findOrFail($id)->delete();
        Photo::where('id', $course->coverID)->delete();

        return redirect()->back()->with('fail', $course->title . ' has been deleted successfully!');
    }

    /**
     * To render detail Course
     *
     * @param  mixed $id
     * @return void
     */
    public function courseDetail($id)
    {
        $course = Course::where('id', $id);

        $lessonGroup = DB::table('lesson_groups')
            ->join('courses', 'lesson_groups.courseID', '=', 'courses.id')
            ->where('courses.id', '=', $id)
            ->select('lesson_groups.title as groupTitle', 'lesson_groups.id as sectionID', 'lesson_groups.id')
            ->get();

        $lesson = DB::table('lessons')
            ->join('lesson_groups', 'lessons.lessonGroupID', '=', 'lesson_groups.id')
            ->join('courses', 'lesson_groups.courseID', '=', 'courses.id')
            ->where('courses.id', '=', $id)
            ->get();

        return view('tutors.courseDetail', ['course' => $course, 'lessonGroup' => $lessonGroup, 'lesson' => $lesson, 'courseID' => $id]);
    }

    /**
     * To create New Section
     *
     * @param  mixed $request
     * @return void
     */
    public function newSection(Request $request)
    {
        $request->validate([
            'courseID' => 'required',
            'section' => 'required'
        ]);

        $data = $request->all();

        LessonGroup::create([
            'courseID' => $data['courseID'],
            'title' => $data['section'],
        ]);

        return redirect()->back()->with('success', 'Your New Section has been created successfully');
    }

    /**
     * To create New Content
     *
     * @param  mixed $request
     * @return void
     */
    public function newContent(Request $request)
    {
        $request->validate([
            'groupID' => 'required',
            'title' => 'required',
            'content' => 'required'
        ]);

        $data = $request->all();

        Lesson::create([
            'title' => $data['title'],
            'lessonGroupID' => $data['groupID'],
            'file' => $data['content'],
        ]);

        return redirect()->back()->with('success', 'Your New Content has been created successfully');
    }

    /**
     * renderLesson
     *
     * @param  mixed $courseID
     * @param  mixed $sectionID
     * @param  mixed $lessonID
     * @return void
     */
    public function renderLesson($courseID, $sectionID, $lessonID)
    {
        $course = Course::where('id', $courseID);

        $lessonGroup = DB::table('lesson_groups')
            ->join('courses', 'lesson_groups.courseID', '=', 'courses.id')
            ->where('courses.id', '=', $courseID)
            ->select('lesson_groups.title as groupTitle', 'lesson_groups.id as sectionID', 'lesson_groups.id')
            ->get();

        $lesson = DB::table('lessons')
            ->join('lesson_groups', 'lessons.lessonGroupID', '=', 'lesson_groups.id')
            ->where('lesson_groups.courseID', '=', $courseID)
            ->select('lessons.*')
            ->get();

        $file = DB::table('lessons')
            ->where('lessons.id', '=', $lessonID)
            ->first();

        return view('tutors.lessons', compact('course', 'lessonGroup', 'lesson', 'file'));
    }
}
