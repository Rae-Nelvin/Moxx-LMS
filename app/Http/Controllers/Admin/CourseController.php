<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        if (!$courses) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Courses Found'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $courses], 200);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'title' => 'required|string',
            'description' => 'string',
            'courseTypeID' => 'required|exists:course_types,id',
            'creatorID' => 'required|exists:users,id',
            'price' => 'required',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $course = Course::create($data);
        
        return response()->json(['status' => 'success', 'data' => $course], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Found'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $course], 200);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'title' => 'string',
            'description' => 'string',
            'courseTypeID' => 'exists:course_types,id',
            'creatorID' => 'exists:users,id',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $course = Course::findOrFail($id);
        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Found.'
            ], 404);
        }

        $course->update($data);
        
        return response()->json(['status' => 'success', 'data' => $course], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::findOrfail($id);
        if (!$course) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Couse Found'
            ], 404);
        }

        $course->delete();

        return response()->json(['status' => 'success', 'message' => 'Course Has Been Deleted'], 200);
    }
}
