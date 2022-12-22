<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   public function customer(){
      //$variable=model name::where('column name','value')->get();
      $customers = User::where("user_designation", "Customer")->get();
    return view ('backend.pages.customer.customer',compact("customers"));
   }
}
