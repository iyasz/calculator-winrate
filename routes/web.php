<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\melerController;
use App\Http\Controllers\topupController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [indexController::class, 'index']);

Route::get('/searchnickname', function () {
    return view('nickname.index');
});

Route::get('/hero/detail/{id}', [indexController::class, 'detail']);
Route::post('/hero/store', [indexController::class, 'store']);

Route::get('/store', [melerController::class, 'index']);

Route::get('/winrate', [melerController::class, 'winrate']);

Route::post('/cekwr', [melerController::class, 'cekwr']);

// top up 
Route::get('/topup', [topupController::class, 'index']);
// end top up 