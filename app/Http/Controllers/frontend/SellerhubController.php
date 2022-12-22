<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerhubController extends Controller
{
    public function sellerhub()
    {
        return view('frontend.pages.sellerhub.sellerhub');
    }
    public function order()
    {
        return view('frontend.pages.sellerhub.order');
    }
    public function transaction()
    {
        return view('frontend.pages.sellerhub.transaction');
    }
}