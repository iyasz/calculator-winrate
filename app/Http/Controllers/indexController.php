<?php

namespace App\Http\Controllers;

use App\Models\avatar;
use App\Models\hero;
use App\Models\role;
use App\Models\skill;
use App\Models\specially;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class indexController extends Controller
{
    public function index()
    {
        $hero = Http::get("https://api.dazelpro.com/mobile-legends/hero")->json();
        
        $hero = $hero['hero'];

        $heroes = hero::all();
        // dd($hero);
        $role = role::get();
        // $speciallity = specially::select('nama')->where('hero_id', $heroes->id)->first();
        // dd($speciallity);
        return view('index', ['hero' => $heroes, 'role' => $role]);
    }

    public function detail($id)
    {
        $hero = hero::find($id);
        $skill = skill::get()->where('hero_id', $hero->id);
        return view('hero.detail', ['hero' => $hero, 'skill' => $skill]);
    }

    public function store(Request $request)
    {
        $reqNama = $request->nama;
        // dd(strtolower(ucfirst($reqNama)));
        $avatar = avatar::select('url')->where('nama', strtolower(ucfirst($reqNama)) )->first();
        $request['avatar_id'] = $avatar->url;
        $request['nama'] = ucfirst(strtolower($reqNama));

        $hero = hero::create($request->except('_token', 'submit', 'specially'));
        

        for($x = 0 ; $x < 3 ; $x++){
            $skill = skill::create([
                'hero_id' => $hero->id
            ]);
        }
        $speciallity = specially::create([
            'hero_id' => $hero->id,
            'nama' => ucfirst(strtolower($request->specially)),
        ]);

        return redirect('/');
    }

    public function remove($id)
    {
        $hero = hero::find($id);
        $skill = skill::where('hero_id', $id)->delete();
        $speciallity = specially::where('hero_id', $id)->delete();
        $hero->delete();

        return redirect('/');
        // dd($hero);
    }
}
