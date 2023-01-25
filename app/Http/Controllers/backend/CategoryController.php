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

    public function editCategory($id){
        $editCategory=Category::find($id);
        return view('backend.pages.category.editCategory',compact('editCategory'));

        // $category->validate([
        //     "category_name" => 'required'

        // ]);
        // $filename = null;
        // if ($category->hasFile('image')) {
        //     $file = $category->file('image');
        //     $filename = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
        //     $file->storeAs('/uploads/category', $filename);
        // }
        // // Category::find($id)->([
        // //     //clm=>input
        // //     'category_name' => $category->category_name,
        // //     'description' => $category->description,
        // //     'image' => $filename
        // // ]);


    }


    public function deleteCategory($id=null){
        $deleteCategory=Category::find($id);
        $deleteCategory->delete();
        notify()->success('','Category deleted successfully');
        return to_route('category.list');
    }

}
