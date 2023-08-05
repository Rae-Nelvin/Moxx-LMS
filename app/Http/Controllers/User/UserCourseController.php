<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserCourseController extends Controller
{
    /**
     * Display a listing of the user course.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $userCourses = UserCourse::where('userID', Auth::user()->id); -> Ideal State
        $userCourses = UserCourse::all();
        if (!$userCourses) {
            return response()->json([
                'status' => 'error',
                'message' => 'No User Courses Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $userCourses], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created user course in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'courseID' => 'required|exists:courses,id',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $userCourse = UserCourse::create([
            'userID' => Auth::user()->id,
            'courseID' => $data['courseID'],
            'totalMaterialsDone' => 0,
        ]);

        return response()->json(['status' => 'success', 'data' => $userCourse], 200);
    }

    /**
     * Display the specified user course.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userCourse = UserCourse::findOrFail($id);
        if (!$userCourse) {
            return response()->json([
                'status' => 'error',
                'message' => 'No User Course Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $userCourse], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified user course in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'courseID' => 'exists:courses,id',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $userCourse = UserCourse::findOrFail($id);
        $userCourse->update([
            'totalMaterialsDone' => $userCourse->totalMaterialsDone + 1,
        ]);

        return response()->json(['status' => 'success', 'data' => $userCourse], 200);
    }

    /**
     * Remove the specified user course from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userCourse = UserCourse::findOrFail($id);
        if (!$userCourse) ([
            'status' => 'error',
            'message' => 'No User Course Found.'
        ]);

        $userCourse->delete();
        
        return response()->json(['status' => 'success', 'message' => 'User Course Has Been Deleted'], 200);
    }
}
