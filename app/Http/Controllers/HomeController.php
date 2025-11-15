<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News; // Tambahkan ini untuk mengimpor model News

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 3 berita terbaru dari database
        // $latestNews = News::latest()->take(3)->get();
        $latestNews = News::latest()->get();


        // Kirim data berita ke view homepage.blade.php
        // return view('homepage', compact('latestNews'));
        return view('homepage', compact('latestNews'));


    }
}
