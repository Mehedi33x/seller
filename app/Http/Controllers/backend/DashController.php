<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashController extends Controller
{
    public function dashboard()
    {
        return view('backend.pages.dashboard.dashboard');
    }
}
