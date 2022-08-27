<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseType;
use App\Models\Lesson;
use App\Models\LessonGroup;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClassController extends Controller
{
    public function renderNewClass()
    {
        $data = CourseType::all();
        return view('tutors.newClass', compact('data'));
    }

    /**
     * To store new Class
     *
     * @param  mixed $request
     * @return void
     */
    public function storeNewClass(Request $request)
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
            'subtitle' => $data['subtitle'],
            'coverID' => $photo->id,
            'courseTypeID' => $data['type'],
            'creatorID' => Auth::user()->id,
            'price' => $data['price'],
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
     * To render detail Course
     *
     * @param  mixed $id
     * @return void
     */
    public function courseDetail($id)
    {
        $course = DB::table('courses')
            ->join('photos', 'courses.coverID', '=', 'photos.id')
            ->where('courses.id', '=', $id)
            ->select('courses.*', 'photos.*')
            ->first();

        $lessonGroup = DB::table('lesson_groups')
            ->join('courses', 'lesson_groups.courseID', '=', 'courses.id')
            ->where('courses.id', '=', $id)
            ->select('lesson_groups.title as groupTitle', 'lesson_groups.id as sectionID')
            ->get();

        $lesson = DB::table('lessons')
            ->join('lesson_groups', 'lessons.lessonGroupID', '=', 'lesson_groups.id')
            ->join('courses', 'lesson_groups.courseID', '=', 'courses.id')
            ->where('courses.id', '=', $id)
            ->get();

        return view('tutors.courseDetail', ['course' => $course, 'lessonGroup' => $lessonGroup, 'lesson' => $lesson]);
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
            'content' => 'required|file|mimes:ppt,pptx'
        ]);

        $data = $request->all();

        $filePath = $request->file('content')->store('/public/' . 'course/' . 'testing/' . $data['groupID'] . '/content');
        $filePath = str_replace('public/', '', $filePath);

        Lesson::create([
            'lessonGroupID' => $data['groupID'],
            'file' => $filePath,
        ]);

        return redirect()->back()->with('success', 'Your New Content has been created successfully');
    }
}
