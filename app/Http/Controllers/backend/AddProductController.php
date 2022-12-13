<?php

namespace App\Http\Controllers\backend;

use notify;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddProductController extends Controller
{
    public function addproduct(){
        return view('backend.pages.product.addproduct'); 
    }
    public function store(Request $product){
        // $dd($product->all());
       $product->validate([
        'name'=>'required',
        'price'=>'required',
        'specifications'=>'required',
        'stocks'=>'required',
       ]);
       
       Product::create([
        'product_name'=>$product->name,
        'product_price'=>$product->price,
        'specifications'=>$product->specifications,
        'warranty'=>$product->warranty_information,
        'stocks'=>$product->stocks,

       ]);
       notify()->success('success','Product created successfully');
        return redirect('/product-list');
    }
}
