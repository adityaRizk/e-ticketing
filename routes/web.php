<?php

use App\Http\Controllers\Admin\MaskapaiController;
use App\Http\Controllers\Admin\PenggunaController;
use App\Http\Controllers\Admin\RuteController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KotaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('admin')->group(function (){
    Route::prefix('pengguna')->controller(PenggunaController::class)->group(function (){
        Route::get('/','index');
        Route::get('/create','create');
        Route::post('/store','store');
        Route::get('/{id}/edit','edit');
        Route::post('/{id}/update','update');
        Route::get('/{id}/delete','destroy');
    });

    Route::prefix('maskapai')->controller(MaskapaiController::class)->group(function (){
        Route::get('/','index');
        Route::get('/create','create');
        Route::post('/store','store');
        Route::get('/{id}/edit','edit');
        Route::post('/{id}/update','update');
        Route::get('/{id}/delete','destroy');
    });

    Route::prefix('rute')->controller(RuteController::class)->group(function (){
        Route::get('/','index');
        Route::get('/create','create');
        Route::post('/store','store');
        Route::get('/{id}/edit','edit');
        Route::post('/{id}/update','update');
        Route::get('/{id}/delete','destroy');
    });

    Route::prefix('kota')->controller(KotaController::class)->group(function (){
        Route::get('/','index');
        Route::get('/create','create');
        Route::post('/store','store');
        Route::get('/{id}/edit','edit');
        Route::post('/{id}/update','update');
        Route::get('/{id}/delete','destroy');
    });
});

Route::get('/admin', function () {
    return view('admin/index');
})->middleware('CekRole:admin');

Route::get('/penumpang', function () {
    return view('penumpang/index');
})->middleware('CekRole:penumpang');

Route::get('/petugas', function () {
    return view('petugas/index');
})->middleware('CekRole:petugas');

Route::controller(AuthController::class)->group(function (){
    Route::get('/logout','logout');
    Route::get('/login','login')->name('login');
    Route::post('/login','store');
    Route::get('/register','register')->name('register');
    Route::post('/register','registerUser');
});
