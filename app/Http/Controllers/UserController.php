<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('users.success');
    }

    public function store()
    {
        return request()->all();
    }
}