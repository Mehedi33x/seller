<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class AddUserController extends Controller
{
    public function addUser(){
        return view ("backend.pages.user.adduser");
    }
    public function store(Request $user){
        //dd($user->all());
        //validation
        $user->validate([
            'name'=>'required|max:50',
            'email'=>'required|email|max:100|unique:users,user_email',
            'contact'=>'required',
            'password'=>'required',
            'designation'=>'required',

        ]);

        //data insert
        //find out problem

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
        return redirect('/user-list');
    }


}
