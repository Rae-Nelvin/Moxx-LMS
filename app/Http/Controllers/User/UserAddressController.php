<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAddresses = UserAddress::all();
        if (!$userAddresses) {
            return response()->json([
                'status' => 'error',
                'message' => 'No User Addresses Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $userAddresses]);
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
            'street_name' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'postal_code' => 'required|string|max:20'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $userAddress = UserAddress::create([
                'userID' => Auth::user()->id,
                'street_name' => $data['street_name'],
                'province' => $data['province'],
                'city' => $data['province'],
                'postal_code' => $data['postal_code']
            ]);

        return response()->json(['status' => 'success', 'data' => $userAddress], 200); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userAddress = UserAddress::findOrFail($id);
        if (!$userAddress) {
            return response()->json([
                'status' => 'error',
                'message' => 'No User Addresse Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'data' => $userAddress]);
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
            'street_name' => 'string',
            'province' => 'string',
            'city' => 'string',
            'postal_code' => 'string|max:20'
        ];

        $data = $request->all();
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $userAddress = UserAddress::findOrFail($id);
        if (!$userAddress) {
            return response()->json([
                'status' => 'error',
                'message' => 'User Address Not Found.'
            ], 404);
        }
        $userAddress->update($data);

        return response()->json(['status' => 'success', 'data' => $userAddress], 200); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userAddress = UserAddress::findOrFail($id);
        if (!$userAddress) {
            return response()->json([
                'status' => 'error',
                'message' => 'User Address Not Found.'
            ], 404);
        }

        return response()->json(['status' => 'success', 'message' => 'User Address Have Been Deleted'], 200);
    }
}
