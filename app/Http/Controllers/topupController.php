<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class topupController extends Controller
{
    public function index()
    {
        return view('topup.index');
    }
}
