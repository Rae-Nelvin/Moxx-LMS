<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the role.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        if (!$roles) {
            return response()->json([
                'status' => 'error',
                'message' => 'Roles Not Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $roles]);
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
     * Store a newly created role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|string|unique:roles,name'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $role = Role::create($data);

        return response()->json(['status' => 'success', 'data' => $role], 200);
    }

    /**
     * Display the specified role.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::findOrFail($id);

        if (!$role) {
            return response()->json([
                'status' => 'error',
                'message' => 'Role Not Found'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $role], 200);
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
     * Update the specified role in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'name' => 'string',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $role = Role::findOrFail($id);
        if (!$role) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Role Found.'
            ], 404);
        }

        $role->update($request->all());

        return response()->json(['status' => 'success', 'data' => $role], 200);
    }

    /**
     * Remove the specified role from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        if (!$role) {
            return response()->json([
                'status' => 'error',
                'message' => 'No Role Found.'
            ], 404);
        }

        $role->delete();

        return response()->json(['status' => 'success', 'message' => 'Role Has Been Deleted'], 200);
    }
}
