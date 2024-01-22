<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\HitungController;

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

Route::get('/home', function () {
    return view('welcome');
})-> name('home');

Route::get('/pendataan', function () {
    return view('pendataan');

})-> name('pendataan');
Route::get('/daftar', function () {
    return view('daftar');
})-> name('daftar');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/hitung', function () {
    return view('hitung');
});

Route::get('/', [HitungController::class, 'hitung']);

Route::get('/daftar', [TestController::class, 'daftar']);
Route::get('/kirim', [TestController::class, 'kirim']);