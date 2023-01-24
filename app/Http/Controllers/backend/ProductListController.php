<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductListController extends Controller
{
    public function product(){
        $productData=Product::paginate(5);
        return view('backend.pages.product.productList',compact('productData'));
    }
    public function addProduct(){
        return view('backend.pages.product.addproduct');
    }

    public function storeProduct( Request $request){

        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required'
        ]);
        $filename = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->storeAs('/uploads/product', $filename);
        }


        Product::create([
            'image'=>$filename,
            'name'=>$request->name,
            'price'=>$request->price,
            'category'=>$request->category,
            'quantity'=>$request->quantity,
            'warranty'=>$request->warranty,
            'specifications'=>$request->specifications,
        ]);
        return to_route('product.list');
    }
    public function editProduct(){
        return view('backend.pages.product.editProduct');
    }

    public function deleteProduct($id=null)
    {
        $deleteProduct=Product::find($id);
        $deleteProduct->delete();
        return to_route('product.list');
    }

}
