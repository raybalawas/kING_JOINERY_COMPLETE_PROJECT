<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Auth;
use App\Models\User;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller; // Make sure to import the base controller

class AuthController extends Controller
{

    public function __construct()
    {
        // Apply middleware here
        // $this->middleware('guest')->except('logout');
    }

    public function RegisterForm()
    {
        return view('admin.Auth.Registration');
    }


    public function RegisterPost(Request $request)
    {
        $request->validate([
            'UserName' => 'required',
            'Email' => 'required|email|unique:users,email',
            'Password' => 'required|confirmed|min:8'
        ]);

        User::create([
            'name' => $request->UserName,
            'email' => $request->Email,
            'password' => Hash::make($request->Password),
        ]);

        return redirect()->back()->with('success', 'Registered successfully. Please log in now.');
    }

    public function AdminLogin()
    {
        return view('admin.Auth.Login');
    }

    public function AdminLoginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // $credentials = $request->only('email', 'password');
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('adminn')->with('success', 'Logged in successfully.');
        }

        return redirect()->back()->with('error', 'Invalid email or password.');
    }

    public function AdminLogout()
    {
        Auth::logout();
        return redirect()->route('login')->with('error', 'Logged out successfully.');
    }
}
