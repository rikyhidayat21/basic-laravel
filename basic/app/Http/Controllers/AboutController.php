<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        // disini tempat untuk menuliskan logika dari program yang akan dibuat
        // untuk saat ini, kita fokus saja untuk membuat logika me return view
        return view('about');
    }
}
