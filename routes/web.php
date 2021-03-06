<?php

use App\Http\Controllers\InboxController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/hello', function(){
    $nama = "Khaidir";
    $kampus = "<b>POLTEK PGRI</b>";
    return view('hello', compact('nama', 'kampus'));
});

Route::resource('mahasiswa', MahasiswaController::class);


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('inbox', InboxController::class);