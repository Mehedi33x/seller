<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function user()
    {

        $showData = User::paginate(5); // why = sign and :: sign
        // dd($showData->all());
        return view('backend.pages.user.user', compact('showData'));
    }
    public function delete($id = null)
    {
        $deleteUser = User::find($id);
        $deleteUser->delete();
        notify()->success('', 'user deleted successfully');
        return redirect()->route('user');
    }
    public function edit($id = null)
    {
        $editUser = User::find($id);
        return view('backend.pages.user.edituser', compact("editUser"));
    }
    // for update
    public function updateUser(Request $editUser, $id)
    {
        //dd($editUser->all());
        //validation
        $editUser->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|max:100|unique:users,email',
            'contact' => 'required',
            'password' => 'required',
            'role' => 'required',

        ]);
        $editUser = User::find($id);
        $editUser->update([
            //clm=>data var->inpt fld
            'name' => $editUser->name,
            'email' => $editUser->email,
            'contact' => $editUser->contact,
            'password' => $editUser->password,
            'address' => $editUser->address,
            'role' => $editUser->role,
        ]);
        notify()->success('success', 'user created successfully');
        return redirect()->route('user');
    }

    public function login()
    {
        return view('backend.pages.auth.login');
    }
}