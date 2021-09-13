<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function product(){
        return "Selamat Datang di Halaman Product";
    }
    public function product1(){
        return "Selamat Datang di Halaman Product 2";
    }
}