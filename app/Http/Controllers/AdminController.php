<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use View;

class AdminController extends Controller
{
    public function index(){
        $data_layout = [
            'title' => 'Halaman admin',
            'card_title' => 'Selamat Datang Di halaman Admin',
        ];
        View::share($data_layout);
        return view('admin.index', []);
    }
}
