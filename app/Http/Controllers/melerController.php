<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class melerController extends Controller
{
    public function index(Request $request)
    {
        $response =   Http::get('https://v1.apigames.id/merchant/M230201ODXH2520HB/cek-username/mobilelegend?user_id='.$_GET['id'].'-'.$_GET['server'].'&signature=5803770065d9c1743b05e43b5aa972e7');

        
        $apiMeler = "https://api.dazelpro.com/mobile-legends/hero";

        $anime =  $response->json();

        return view('hasil', ['meler' => $anime]);


    }
}   
