<?php

namespace App\Http\Controllers\backend;

use notify;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddCategoryController extends Controller
{
    public function addCategory(){
        return view('backend.pages.category.addcategory');
    }

    public function store(Request $category){

        //dd($category->all());
        $category->validate([
            "category_name"=>'required'

        ]);

        Category::create([
            
            'category_name'=>$category->category_name,
           'description' =>$category->description,
        ]);
        notify()->success('success','Category Created Successfully');
        return redirect()->route('category.list');



    }
}
