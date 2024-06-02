<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function login (){

        return view('login');
    }

    public function authUser(LoginRequest $request)
    {
        $credentials = $request->only('name','password');

        if(Auth::attempt($credentials)){
            $request->session()->put('name', $request->input('name'));
            session(['isLoggedIn' => true]);
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->with('message', 'Invalid email or password');
    }

    public function logoutUser(){

        Auth::logout();
       // Clear the session variable indicating the user is logged in
        session()->forget('isLoggedIn');
        return redirect('admin'); // Redirect to the login page or any other desired page

    }
}
