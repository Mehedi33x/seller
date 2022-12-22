<?php

namespace App\Http\Controllers\frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function product()
    {
        $productdata = Product::paginate(5);
        return view('frontend.pages.products.productlist', compact('productdata'));

    }
    public function store(Request $product)
    {
        Product::create([
            // 'product_image'=>$product->;
            'product_name' => $product->name,
            'product_price' => $product->price,
            'specifications' => $product->specifications,
            'warranty' => $product->warranty,
            'stocks' => $product->stocks,
        ]);

    }

}