<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Auth;

class LoginController extends Controller
{
    // public function login()
    // {
    //     if (Auth::check()) {
    //         return redirect('/');
    //     } else {
    //         return view('/login');
    //     }
    // }
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}