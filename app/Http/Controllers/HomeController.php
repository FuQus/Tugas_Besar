<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index'); // Pastikan ini adalah halaman yang ingin Anda tampilkan
    }
}
