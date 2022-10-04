<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * To render detail Course
     *
     * @param  mixed $id
     * @return void
     */
    public function courseDetail($id)
    {
        $course = Course::where('id', $id)->first();

        $lessonGroup = DB::table('lesson_groups')
            ->join('courses', 'lesson_groups.courseID', '=', 'courses.id')
            ->where('courses.id', '=', $id)
            ->select('lesson_groups.title as groupTitle', 'lesson_groups.id as sectionID', 'lesson_groups.id')
            ->get();

        $lesson = Lesson::get();

        return view('admins.dashboard.courseDetail', ['course' => $course, 'lessonGroup' => $lessonGroup, 'lesson' => $lesson, 'courseID' => $id]);
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
        $course = Course::where('id', '=', 2)->first();

        $lessonGroup = DB::table('lesson_groups')
            ->join('courses', 'lesson_groups.courseID', '=', 'courses.id')
            ->where('courses.id', '=', $courseID)
            ->select('lesson_groups.title as groupTitle', 'lesson_groups.id as sectionID', 'lesson_groups.id')
            ->get();

        $lesson = Lesson::get();

        $file = Lesson::where('lessons.id', '=', $lessonID)->first();

        return view('admins.dashboard.lessons', compact('course', 'lessonGroup', 'lesson', 'file'));
    }

    /**
     * rejectCourse
     *
     * @param  mixed $id
     * @return void
     */
    public function rejectCourse($id)
    {
        Course::where('id', $id)->update(['isActive' => 2]);

        return redirect()->back()->with('fail', 'Terdapat course yang baru saja anda tolak!');
    }

    /**
     * acceptCourse
     *
     * @param  mixed $id
     * @return void
     */
    public function acceptCourse($id)
    {
        Course::where('id', $id)->update(['isActive' => 1]);

        return redirect()->back()->with('success', 'Terdapat course yang baru saja anda terima!');
    }
}
