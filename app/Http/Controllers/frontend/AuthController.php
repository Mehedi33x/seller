<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //show sign in and sign up page
    public function registration()
    {
        return view('frontend.pages.auth.signup');
    }
    // public function registration()
    // {
    //     return view('frontend.pages.auth.');
    // }

    public function storeRegistration(Request $user)
    {
        $user->validate([
            'email' => 'required|email|max:100|unique:users,user_email',
            'password' => 'required',
        ]);
        User::create([
            //clm=>data var->inpt fld
            'user_email' => $user->email,
            'user_password' => $user->password,
        ]);
        notify()->success('success', 'user created successfully');
        return redirect('/homepage');
    }
}