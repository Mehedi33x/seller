<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('frontend.pages.products.productlist');
    }
    // public function addproduct(){
    //     return view('frontend.pages.products.addproduct');
    // }
    
}
