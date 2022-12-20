<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //show sign in and sign up page
    public function login(){
        return view('frontend.pages.auth.login');
    }
    public function register(){
        return view('frontend.pages.auth.registration');
    }

    public function signup(Request $user){
        $user->validate([
            'name'=>'required|max:50',
            'email'=>'required|email|max:100|unique:users,user_email',
            'contact'=>'required',
            'password'=>'required',
            'designation'=>'required',

        ]);
        User::create([
            //clm=>data var->inpt fld
            'user_name'=>$user->name,
            'user_email'=>$user->email,
            'user_contact'=>$user->contact,
            'user_password'=>$user->password,
            'user_address'=>$user->address,
            'user_designation'=>$user->designation,
        ]);
        notify()->success('success','user created successfully');
        return redirect('/homepage');
    }
}
