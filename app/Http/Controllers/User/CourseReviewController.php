<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\CourseReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CourseReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $courseReviews = CourseReview::where('userID', Auth::user()->id)->get(); -> Ideal State
        $courseReviews = CourseReview::all();
        if (!$courseReviews) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Reviews Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $courseReviews], 200);
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
     * Store a newly created course review in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'courseID' => 'required|exists:courses,id',
            'reviews' => 'required|string',
            'stars' => 'required|integer|min:1|max:5'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $courseReview = CourseReview::create([
            'userID' => Auth::user()->id,
            'courseID' => $data['courseID'],
            'reviews' => $data['reviews'],
            'stars' => $data['stars'],
        ]);

        return response()->json(['status' => 'success', 'data' => $courseReview], 200);
    }

    /**
     * Display the specified course review.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseReview = CourseReview::findOrFail($id);
        if (!$courseReview) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Review Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $courseReview], 200);
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
     * Update the specified course review in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'courseID' => 'required|exists:courses,id',
            'reviews' => 'required|string',
            'stars' => 'required|integer|min:1|max:5'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $courseReview = CourseReview::findOrFail($id);
        if (!$courseReview) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Review Found'
            ], 404);
        }

        $courseReview->update($data);

        return response()->json(['status' => 'success', 'data' => $courseReview], 200);
    }

    /**
     * Remove the specified course review from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courseReview = CourseReview::findOrFail($id);
        if (!$courseReview) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Course Review Found'
            ], 404);
        }

        $courseReview->delete();

        return response()->json(['status' => 'success', 'message' => 'Course Review Has Been Deleted'], 200);
    }
}
