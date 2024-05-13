<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard2Controller extends Controller
{
    // methode untuk menampilkan dashboard
    public function index(){
        return view('admin.contents.dashboard.index');
    }
}
