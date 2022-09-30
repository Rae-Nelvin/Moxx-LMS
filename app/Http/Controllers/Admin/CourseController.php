<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
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

        $lesson = DB::table('lessons')
            ->join('lesson_groups', 'lessons.lessonGroupID', '=', 'lesson_groups.id')
            ->join('courses', 'lesson_groups.courseID', '=', 'courses.id')
            ->where('courses.id', '=', $id)
            ->get();

        return view('admins.courseDetail', ['course' => $course, 'lessonGroup' => $lessonGroup, 'lesson' => $lesson, 'courseID' => $id]);
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
