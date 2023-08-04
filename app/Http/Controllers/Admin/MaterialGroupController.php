<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MaterialGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaterialGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materialGroups = MaterialGroup::all();
        if (!$materialGroups) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Material Groups Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $materialGroups], 200);
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
            'courseID' => 'required|exists:courses,id',
            'title' => 'required|string'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $materialGroup = MaterialGroup::create($data);

        return response()->json(['status' => 'success', 'data' => $materialGroup], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $materialGroup = MaterialGroup::findOrFail($id);
        if (!$materialGroup) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Material Group Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $materialGroup], 200);
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
            'courseID' => 'exists:courses,id',
            'title' => 'string'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $materialGroup = MaterialGroup::findOrFail($id);
        $materialGroup->update($data);

        return response()->json(['status' => 'success', 'data' => $materialGroup], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materialGroup = MaterialGroup::findOrFail($id);
        if (!$materialGroup) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Material Group Found.'
            ], 404);
        }

        $materialGroup->delete();

        return response()->json(['status' => 'success', 'message' => 'The Material Group Has Been Deleted'], 200);    }
}
