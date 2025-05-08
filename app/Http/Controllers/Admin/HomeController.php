<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        $transactions = \App\Models\Transaction::all();
        return view('admin.index', compact('transactions'));
    }
}
