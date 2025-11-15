<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        // menampilkan tampilan about.blade.php
        return view('about');
    }
}
