<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage(){
        return view('frontend.pages.homepage');
    }
    public function login(){
        return view('frontend.pages.auth.login');
    }
}
