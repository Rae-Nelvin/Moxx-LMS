<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CoursePhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CoursePhotoController extends Controller
{
    /**
     * Display a listing of the course photo.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursePhotos = CoursePhoto::all();
        if (!$coursePhotos) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Photos Found'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $coursePhotos], 200);
    }

    /**
     * Show the form for creating a new course photo.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created course photo in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'courseID' => 'required|exists:courses,id',
            'imageURL' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        if ($request->hasFile('imageURL')) {
            $image = $request->file('imageURL');
            $path = $image->store('course_photos', 'public');
            $data['imageURL'] = $path;
        }

        $coursePhoto = CoursePhoto::create($data);

        return response()->json(['status' => 'success', 'data' => $coursePhoto], 200);
    }

    /**
     * Display the specified course photo.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coursePhoto = CoursePhoto::findOrFail($id);
        if (!$coursePhoto) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Photo Found'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $coursePhoto], 200);
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
     * Update the specified course photo in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'courseID' => 'exists:courses,id',
            'imageURL' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $coursePhoto = CoursePhoto::findOrFail($id);
        if (!$coursePhoto) {
            return response()->json([
                'status' => 'success',
                'message' => 'No Course Photo Found.'
            ], 404);
        }

        // Delete previous photo if a new one is provided
        if ($request->hasFile('imageURL')) {
            Storage::disk('public')->delete($coursePhoto->imageURL);
            $image = $request->file('imageURL');
            $path = $image->store('course_photos', 'public');
            $data['imageURL'] = $path;
        }

        $coursePhoto->update($data);

        return response()->json(['status' => 'success', 'data' => $coursePhoto], 200);
    }

    /**
     * Remove the specified course photo from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $coursePhoto = CoursePhoto::findOrFail($id);
        if (!$coursePhoto) {
            return response()->json([
                'status' => 'success',
                'message' => 'No Course Photo Found.'
            ], 404);
        }

        $coursePhoto->delete();

        return response()->json(['status' => 'success', 'message' => 'Course Photo Have Been Deleted'], 200);
    }
}
