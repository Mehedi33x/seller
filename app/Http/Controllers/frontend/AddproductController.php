<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddproductController extends Controller
{
    public function addproduct(){
        return view('frontend.pages.products.addproduct');
    }
    public function store(Request $product){
        // dd($product->all());
        $fileName = null;
        if($product->hasFile('image')){
            $fileName = date('Ymdhmsis').'.'.$product->file('image')
            ->getclientOriginalExtension();
            $product->file('image')->storeAs('/uploads/products',$fileName);
        }
       $product->validate([
        'image'=>'mimes:png,jpg,jpeg',
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
        'product_image'=>$fileName,

       ]);
       notify()->success('success','Product created successfully');
        return redirect()->route('sellerhub');
    }
}
