<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function anasayfa()
    {
        return view('front.anasayfa');
    }

    public function hakkimizda()
    {
        return view('front.hakkimizda');
    }

    public function iletisim()
    {
        return view('front.iletisim');
    }

    public function kategori()
    {
        return view('front.kategori');
    }
}
