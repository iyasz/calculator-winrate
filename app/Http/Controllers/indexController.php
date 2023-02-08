<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class indexController extends Controller
{
    public function index()
    {
        $hero = Http::get("https://api.dazelpro.com/mobile-legends/hero")->json();
        
        $hero = $hero['hero'];

        // dd($hero);
        return view('index', ['hero' => $hero]);
    }
}
