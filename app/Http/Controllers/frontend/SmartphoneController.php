<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function smartphone(){
        return view('frontend.pages.smartphone.smartphpne');
    }
}
