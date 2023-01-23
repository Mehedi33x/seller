<?php

namespace App\Http\Controllers\backend;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AddUserController extends Controller
{
    public function addUser()
    {
        return view("backend.pages.user.adduser");
    }
    public function store(Request $user)
    {
        //dd($user->all());
        //validation
        $user->validate([
            // clm name
            'name' => 'required|max:50',
            'email' => 'required|email|max:100|unique:users,email',
            'contact' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        //data insert
        //find out problem

        User::create([
            //clm=>data var->inpt fld
            'name' => $user->name,
            'email' => $user->email,
            'contact' => $user->contact,
            'password' => Hash::make($user->password),
            'address' => $user->address,
            'role' => $user->role,
        ]);
        notify()->success('success', 'user created successfully');
        return to_route('user');
    }


}