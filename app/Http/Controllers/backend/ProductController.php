<?php

namespace App\Http\Controllers\backend;

use notify;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product(){
        $productdata=Product::paginate(5);
        return view('backend.pages.product.productList',compact('productdata'));
    }
    public function deleteproduct($id=null){
        $deleteproduct = Product :: find($id);
        $deleteproduct->delete();
        notify()->success('','Product has been deleted');
        return redirect('/product-list');
    }
}
