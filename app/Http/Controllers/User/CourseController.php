<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * renderCourseDetail
     *
     * @param  mixed $id
     * @return void
     */
    public function renderCourseDetail($id)
    {
        $course = Course::where('id', $id)->first();

        return view('users.courseDetail', compact('course'));
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
        $course = Course::where('id', $courseID)->first();

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

        if ($lessonID == 1) {
            $file = Lesson::where('id', '=', $lesson[0]->id)->first();
        } else {
            $file = DB::table('lessons')
                ->where('lessons.id', '=', $lessonID)
                ->first();
        }

        return view('users.lessons', compact('course', 'lessonGroup', 'lesson', 'file'));
    }
}
