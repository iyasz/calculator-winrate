<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\wrRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class melerController extends Controller
{
    public function index(Request $request)
    {
        
        
        $response =   Http::get('https://v1.apigames.id/merchant/M230201ODXH2520HB/cek-username/mobilelegend?user_id='.$_GET['id'].'-'.$_GET['server'].'&signature=5803770065d9c1743b05e43b5aa972e7')->json();
        
        // if(is_null($response)){
        //     $response = 'tidak ada';
        // }

        $apiMeler = "https://api.dazelpro.com/mobile-legends/hero";

        return view('nickname.hasil', ['meler' => $response]);
    }

    public function winrate()
    {
        return view('wr.index');
    }

    public function cekwr(wrRequest  $request)
    {
        $text1 = 'Kamu memerlukan sekitar ';
        $text2 = ' Win Tanpa Lose Untuk Mendapatkan Winrate ';

        $tPer = $request->tPer;
        $tWr = $request->tWr;
        $reqWr = $request->reqWr;
        

                // rumus 
        $tWin = $tPer * ($tWr / 100);
        $tLose = $tPer - $tWin;
        $calcWr = 100 - $reqWr;
        $sumWr = 100 / $calcWr;
        $calcLR = $tLose * $sumWr;
        $finalCalc = $calcLR - $tPer;
        $total = round($finalCalc);

        if($tPer % 1 != 0){
            return redirect('/winrate')->with('data', 'Total Pertandingan Harus Bilangan Bulat');
        }
        if($reqWr >= 100 OR $tWr > 100){
            return redirect('/winrate')->with('data', 'WR nya kegedean masbro');
        }    
        if($tWr > $reqWr){
            return redirect('/winrate')->with('data', 'WR lu kegedean Masbro ');
        }

        
        
        return redirect('/winrate')->with('data', $text1 . $total . $text2 . $reqWr . '%')->withInput();
        // Redirect::back()->withInput(Input::all());





        
    }
}   
