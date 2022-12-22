<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function user(){

        $showData=User::paginate(5);  // why = sign and :: sign
       // dd($showData->all());
        return view('backend.pages.user.user',compact('showData'));
    }
    public function delete($id=null){
        $deleteUser=User::find($id);
        $deleteUser->delete();
        notify()->success('','user deleted successfully');
        return redirect('/user-list');
       }
    public function edit($id=null){
        $editUser=User::find($id);
        return view('backend.pages.user.edituser',compact("editUser"));
    }
// for update
public function updateUser(Request $editUser,$id){
    //dd($editUser->all());
    //validation
    $editUser->validate([
        'name'=>'required|max:50',
        'email'=>'required|email|max:100|unique:users,user_email',
        'contact'=>'required',
        'password'=>'required',
        'designation'=>'required',

    ]);
     $editUser=User::find($id);
     $editUser->update([
        //clm=>data var->inpt fld
        'user_name'=>$editUser->name,
        'user_email'=>$editUser->email,
        'user_contact'=>$editUser->contact,
        'user_password'=>$editUser->password,
        'user_address'=>$editUser->address,
        'user_designation'=>$editUser->designation,
    ]);
    notify()->success('success','user created successfully');
    return redirect('/user-list');
}

    public function login(){
        return view ('backend.pages.login.login');
    }
}
