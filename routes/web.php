<?php

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


Route::get('/spot', 'GadgetController@spot');
Route::get('/home', function() {
	return view('layouts.default');
});


//28 years
//auto push test   
Auth::routes();

Route::get('/spot', 'HomeController@index')->name('home');
Route::get('/spot1', 'GadgetController@spot1');
Route::get('qr_code', 'GadgetController@qr_code');

Route::get('qr-code-g', function () {
  \QrCode::size(500)
            ->format('png')
            ->generate('ItSolutionStuff.com', public_path('assets/img/qrcode.png'));
    
  return view('gadget.qr_code');
    
});
