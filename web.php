<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Route::get('/', function () {
   //return view('front.anasayfa');
//});


Route::get('/', 'HomeController@anasayfa')->name('anasayfa');

Route::get('/hakkimizda', 'HomeController@hakkimizda')->name('hakkimizda');

Route::get('/iletisim', 'HomeController@iletisim')->name('iletisim');

Route::get('/kategori', 'HomeController@kategori');
