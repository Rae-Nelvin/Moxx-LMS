<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MaterialController extends Controller
{
    /**
     * Display a listing of the material.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Material::all();
        if (!$materials) {
            return response()->json([
                'status' => 'error',
                'message' => 'Materials Not Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $materials], 200);
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
     * Store a newly created material in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'materialGroupID' => 'required|exists:material_groups,id',
            'title' => 'required|string',
            'file' => 'required|string'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $material = Material::create($data);

        return response()->json(['status' => 'success', 'data' => $material], 200);
    }

    /**
     * Display the specified material.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = Material::findOrFail($id);
        if (!$material) {
            return response()->json([
                'status' => 'error',
                'message' => 'Material Not Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $material], 200);
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
     * Update the specified material in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'materialGroupID' => 'required|exists:material_groups,id',
            'title' => 'required|string',
            'file' => 'required|string'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $material = Material::findOrFail($id);
        if (!$material) {
            return response()->json([
                'status' => 'error',
                'message' => 'Material Not Found.'
            ], 404);
        }

        $material->update($data);
        return response()->json(['status' => 'success', 'data' => $material], 200);
    }

    /**
     * Remove the specified material from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Material::findOrFail($id);
        if (!$material) {
            return response()->json([
                'status' => 'error',
                'message' => 'Material Not Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'message' => 'Material Has Been Deleted'], 200);
    }
}
