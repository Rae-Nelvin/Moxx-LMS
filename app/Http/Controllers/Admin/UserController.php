<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('roleID', '!=', 1)->get();

        if (!$users) {
            return response()->json([
                'status' => 'error',
                'message' => 'Users Not Found'
            ], 404);
        }

        return response()->json(['status', 'success', 'data' => $users], 200);
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
     * Store a newly created user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'username' => 'required|string|unique:users,username|max:20',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'phone' => 'max:25',
            'roleID' => 'required',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $user = User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone' => $data['phone'],
            'avatar' => $data['avatar'],
            'roleID' => $data['roleID']
        ]);

        return response()->json(['status' => 'success', 'data' => $user], 200);
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'No User Found.'
            ], 404);
        }
            
        return response()->json(['status' => 'success', 'data' => $user], 200);
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
     * Update the specified user in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'username' => 'string|unique:users,username|max:20',
            'name' => 'string',
            'email' => 'email|unique:users,email',
            'password' => 'string|min:8',
            'phone' => 'max:25',
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $user = User::findOrFail($id);
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'No User Found.'
            ], 404);
        }

        $user->update($request->all());

        return response()->json(['status' => 'success', 'data' => $user], 200);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if (!$user) {
            return response()->json([
                'status' => 'error',
                'message' => 'No User Found.'
            ], 404);
        }

        $user->delete();

        return response()->json(['status' => 'success', 'message' => 'User Has Been Deleted'], 200);
    }
}
