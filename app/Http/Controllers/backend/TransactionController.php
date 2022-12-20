<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transaction(){
        return view('backend.pages.transactions.transactions');
    }
}
