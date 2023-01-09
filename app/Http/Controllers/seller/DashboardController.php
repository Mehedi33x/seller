<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Queue\Failed\PrunableFailedJobProvider;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('seller.master');
    }
}