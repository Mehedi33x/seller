<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccessoriesController extends Controller
{
    public function accessories (){
        return view('frontend.pages.accessories.accessories');
    }
}
