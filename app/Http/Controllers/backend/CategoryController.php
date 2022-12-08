<?php

namespace App\Http\Controllers\backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category (){
        $categorydata=Category::paginate(5);
        return view('backend.pages.category.categorylist',compact('categorydata'));
    }
    
}
