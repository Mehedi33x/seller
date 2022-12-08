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
}
