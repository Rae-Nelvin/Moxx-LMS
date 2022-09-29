<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Render Tutor Dashboard
     *
     * @return void
     */
    public function render()
    {
        $data = DB::table('courses')
            ->join('photos', 'courses.coverID', '=', 'photos.id')
            ->select('courses.*', 'photos.*')
            ->get();
        return view('tutors.dashboard', compact('data'));
    }
}
