<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.pages.auth.login');
    }
    public function do_login(Request $request)
    {
        // dd($request->all());
        // $password = $request->password;
        // if (Auth::attempt(['email' => $request->email, 'password' => $password])) {
        //     return to_route('dashboard');
        // }
        $credentials = $request->except('_token');
        if (Auth::attempt($credentials)) {
            return to_route('dashboard');
        }
        return to_route('login');
    }
    public function logout()
    {
        Auth::logout();
        return to_route('homepage');
    }

    // registration
    public function registration(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        User::create([
            'email' => $request->email,
            'password' => $request->password
        ]);
        return to_route('homepage');
    }

}