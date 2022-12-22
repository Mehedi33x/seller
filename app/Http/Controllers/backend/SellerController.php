<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    public function seller()
    {
        $seller = User::where('user_designation', 'Seller')->get();
        return view('backend.pages.sellers.seller', compact('seller'));
    }
}