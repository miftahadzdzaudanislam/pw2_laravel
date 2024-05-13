<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function index(){
        $data_layout = [
            'title' => 'Halaman admin',
            'card_title' => 'Selamat Datang Di halaman Admin',
        ];
        view::share($data_layout);
        return view('admin.index', []);
    }
}
