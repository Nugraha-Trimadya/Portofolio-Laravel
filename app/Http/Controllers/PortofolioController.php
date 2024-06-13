<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function social_media()
    {
        return view('social_media');
    }
    public function sertifikat()
    {
        return view('sertifikat');
    }
}
