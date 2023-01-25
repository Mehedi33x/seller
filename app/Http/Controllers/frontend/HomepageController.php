<?php

namespace App\Http\Controllers\frontend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function homepage()

    {
            $categoryData=Category::all();
        return view('frontend.pages.homepage.homepage',compact('categoryData'));
    }
}
