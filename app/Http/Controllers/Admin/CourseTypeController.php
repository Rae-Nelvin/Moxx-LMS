<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CourseTypeController extends Controller
{
    /**
     * Display a listing of the course type.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseTypes = CourseType::all();
        if (!$courseTypes) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Types Found'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $courseTypes], 200);
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
     * Store a newly created course type in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|unique:course_types,id'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $courseType = CourseType::create($data);

        return response()->json(['status' => 'success', 'data' => $courseType], 200);
    }

    /**
     * Display the specified course type.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseType = CourseType::findOrFail($id);
        if (!$courseType) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Type Found'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $courseType], 200);
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
     * Update the specified course type in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'string|unique:course_types,id'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $courseType = CourseType::findOrFail($id);
        $courseType->update($data);

        return response()->json(['status' => 'success', 'data' => $courseType], 200);
    }

    /**
     * Remove the specified course type from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courseType = CourseType::findOrFail($id);
        if(!$courseType) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Type Found'
            ], 404);
        }

        $courseType->delete();

        return response()->json(['status' => 'success', 'message' => 'Course Type Has Been Deleted'], 200);
    }
}
