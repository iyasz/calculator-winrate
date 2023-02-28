<?php

use App\Http\Controllers\authController;
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

Route::middleware('auth')->group(function(){
    Route::get('/logout', [authController::class, 'logout']);
    
    
    Route::get('/searchnickname', function () {
        return view('nickname.index');
    });
    Route::get('/store', [melerController::class, 'index']);
    
    // cek wr 
    Route::get('/winrate', [melerController::class, 'winrate']);
    Route::post('/cekwr', [melerController::class, 'cekwr']);
    // end cek wr 
    
    // top up 
    Route::get('/topup', [topupController::class, 'index']);
    // end top up 
    
    // Only Admin 
    Route::middleware('admin')->group(function(){
        Route::get('/', [indexController::class, 'index']);
        Route::get('/hero/detail/{id}', [indexController::class, 'detail']);
        
        Route::get('/hero/{id}', [indexController::class, 'remove']);
        
        Route::post('/hero/store', [indexController::class, 'store']);
        
        Route::put('/hero/{id}', [indexController::class, 'update']);
    });
//  End Admin 
});

Route::middleware('userGuest')->group(function(){
    Route::get('/auth/login', [authController::class, 'login'])->name('login');
    Route::post('/login', [authController::class, 'authLogin']);
    
    Route::get('/auth/register', [authController::class, 'register']);
    Route::get('/auth/register', [authController::class, 'register']);
});



// auth 


// end auth 