<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function(){
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar laravel</p>';
});

Route::get('/siswa/smkbpi/rpl', function () {
    echo '<h2 style="text-align: center;"><u>Welcome to 11 RPL</u></h2>';
});

Route::get('siswa/{rizky}', function ($rizky){
    return "tampilkan data siswa bernama $rizky";
});

