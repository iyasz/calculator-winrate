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

        $apiMeler = Http::get("https://api.dazelpro.com/mobile-legends/hero")->json();
        // dd($response);

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
        


        if($tPer % 1 != 0){
            return redirect('/winrate')->with('data', 'Total Pertandingan Harus Bilangan Bulat')->withInput();
        }
        if($tWr == 100){
            return redirect('/winrate')->with('data', 'Mau Pamer Masbro?')->withInput();
        }    
        if($reqWr == 100){
            return redirect('/winrate')->with('data', 'Mana Bisa Masbro')->withInput();
        }    
        if($reqWr > 100 OR $tWr > 100){
            return redirect('/winrate')->with('data', 'WR nya kegedean masbro')->withInput();
        }    
        if($tWr > $reqWr){  
            return redirect('/winrate')->with('data', 'WR lu kegedean Masbro ')->withInput();
        }          
            // rumus 
            $tWin = $tPer * ($tWr / 100);
            $tLose = $tPer - $tWin;
            $calcWr = 100 - $reqWr;
            $sumWr = 100 / $calcWr;
            $calcLR = $tLose * $sumWr;
            $finalCalc = $calcLR - $tPer;
            $total = round($finalCalc);
            
            return redirect('/winrate')->with('data', $text1 . $total . $text2 . $reqWr . '%')->withInput();
        // Redirect::back()->withInput(Input::all());
        
    }
}   
