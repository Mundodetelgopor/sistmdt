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
    return view('institutionalshop');
});

Route::get('/contact', function () {
    return view('public.contactshop');
});


Route::post('send', ['as' => 'send', 'uses' => 'MailController@send'] );
//Route::get('contact', ['as' => 'contact', 'uses' => 'MailController@index'] );

//Route::post('send', function () {
//    return view('public.contact');
//});

Route::get('/shop', function () {
    return view('public.shop');
});


