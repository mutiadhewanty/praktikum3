<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return "Selamat Datang di Halaman Awal Website";
    }
    
}
