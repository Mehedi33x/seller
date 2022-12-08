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
            //clm=>data->inpt fld
            'user_name'=>$user->name,
            'user_email'=>$user->email,
            'user_contact'=>$user->contact,
            'user_password'=>$user->password,
            'user_address'=>$user->address,
            'user_designation'=>$user->designation,
        ]);

        // $identity= new User;
        // $identity->user_name=$user->input('name');
        // $identity->user_email=$user->input('email');
        // $identity->user_contact=$user->input('contact');
        // $identity->user_password=$user->input('password');
        // $identity->user_address=$user->input('address');
        // $identity->save();
        notify()->success('success','user created successfully');
        return redirect('/user-list');
    }

    public function delete($id=null){
        $deleteUser=User::find($id);
        $deleteUser->delete();
        notify()->success('success','user deleted successfully');
        return redirect('/user-list');



    }
}