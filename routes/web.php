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
    return view('home');
});

Route::get('/suporte', function () {
    return view('suporte');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produtos/automacao', function () {
    return view('produtos/automacao');
});

Route::get('/produtos/cloud', function () {
    return view('produtos/cloud');
});

Route::get('/produtos/edu', function () {
    return view('produtos/edu');
});

Route::get('/produtos/lgpd', function () {
    return view('produtos/lgpd');
});

Route::get('/produtos/msp', function () {
    return view('produtos/msp');
});

Route::get('/produtos/outsourcing', function () {
    return view('produtos/outsourcing');
});

Route::get('/produtos/renting', function () {
    return view('produtos/renting');
});

Route::get('/produtos/soft', function () {
    return view('produtos/soft');
});

Route::get('/produtos/wifi', function () {
    return view('produtos/wifi');
});