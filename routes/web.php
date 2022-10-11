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
    $automacao = "https://ik.imagekit.io/bistecbr/img-lg-bistec-automacao.png";
    $cloud = "https://ik.imagekit.io/bistecbr/img-lg-bistec-cloud.png";
    $edu = "https://ik.imagekit.io/bistecbr/img-lg-bistec-edu.png";
    $ged = "https://ik.imagekit.io/bistecbr/img-lg-bistec-ged.png";
    $green = "https://ik.imagekit.io/bistecbr/img-lg-bistec-green.png";
    $lgpd = "https://ik.imagekit.io/bistecbr/img-lg-bistec-lgpd.png";
    $msp = "https://ik.imagekit.io/bistecbr/img-lg-bistec-msp.png";
    $outsourcing = "https://ik.imagekit.io/bistecbr/img-lg-bistec-outsourcing.png";
    $pay = "https://ik.imagekit.io/bistecbr/img-lg-bistec-pay.png";
    $renting = "https://ik.imagekit.io/bistecbr/img-lg-bistec-renting.png";
    $sign = "https://ik.imagekit.io/bistecbr/img-lg-bistec-sign.png";
    $soft = "https://ik.imagekit.io/bistecbr/img-lg-bistec-soft.png";
    $voip = "https://ik.imagekit.io/bistecbr/img-lg-bistec-voip.png";
    $wifi = "https://ik.imagekit.io/bistecbr/img-lg-bistec-wifi.png";
    $xml = "https://ik.imagekit.io/bistecbr/img-lg-bistec-xml.png";

    return view('home', ['automacao' => $automacao, 'cloud' => $cloud, 'edu' => $edu, 'ged' => $ged, 'green' => $green, 'lgpd' => $lgpd, 'msp' => $msp, 'outsourcing' => $outsourcing, 'pay' => $pay, 'renting' => $renting, 'sign' => $sign, 'soft' => $soft, 'voip' => $voip, 'wifi' => $wifi, 'xml' => $xml]);
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

Route::get('/produtos/ged', function () {
    return view('produtos/ged');
});

Route::get('/produtos/green', function () {
    return view('produtos/green');
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

Route::get('/produtos/pay', function () {
    return view('produtos/pay');
});

Route::get('/produtos/renting', function () {
    return view('produtos/renting');
});

Route::get('/produtos/sign', function () {
    return view('produtos/sign');
});

Route::get('/produtos/soft', function () {
    return view('produtos/soft');
});

Route::get('/produtos/voip', function () {
    return view('produtos/voip');
});


Route::get('/produtos/wifi', function () {
    return view('produtos/wifi');
});

Route::get('/produtos/xml', function () {
    return view('produtos/xml');
});

Route::get('/produtos/hostfiber', function () {
    return view('produtos/hostfiber');
});