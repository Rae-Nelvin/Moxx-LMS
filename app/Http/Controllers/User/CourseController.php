<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\LessonGroup;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    public function renderLesson($courseID, $lessonID)
    {
        $userCourse = UserCourse::where('id', $courseID)->first();
        $lessonGroup = LessonGroup::where('courseID', $userCourse->courseID)->get();
        $lesson = Lesson::where('lessonGroupID', $lessonGroup[0]->id)->get();
        $content = Lesson::where('id', $lessonID)->first();
        $userCourseUp = UserCourse::where('userID', Auth::user()->id)->where('courseID', $courseID)->update([
            'progressLessonID' => $lessonID,
        ]);

        return view('users.lessons', compact('userCourse', 'lessonGroup', 'lesson', 'content'));
    }
}
