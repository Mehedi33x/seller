<?php

namespace App\Http\Controllers\backend;

use notify;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function category (){
        $categorydata=Category::paginate(5);
        return view('backend.pages.category.categorylist',compact('categorydata'));
    }
    public function deleteCategory($id=null){
        $deleteCategory=Category::find($id);
        $deleteCategory->delete();
        notify()->success('','Category deleted successfully');
        return to_route('category.list');
    }

}
