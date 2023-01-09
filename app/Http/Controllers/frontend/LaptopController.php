<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    public function laptop()
    {
        return view('frontend.pages.laptop.laptop');
    }

    public function laptopView()
    {
        return view('frontend.pages.laptop.productView');
    }
}