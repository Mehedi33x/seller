<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function camera(){
        return view('frontend.pages.camera.camera');
    }
}
