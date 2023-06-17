<?php

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
    return view('registrasi');
});

Route::get('/katalog', function () {
    return view('katalog');
});

Route::get('/bayardp', function () {
    return view('bayardp');
});

Route::get('/bayarpelunasan', function () {
    return view('bayarpelunasan');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/catering', function () {
    return view('catering');
});

Route::get('/konfirmasidp', function () {
    return view('confirmdp');
});

Route::get('/dekorasi', function () {
    return view('dekorasi');
});

Route::get('/downpayment', function () {
    return view('downpayment');
});

Route::get('/konfirmasipelunasan', function () {
    return view('confirmpelunasan');
});

Route::get('/otp', function () {
    return view('otp');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/pelunasan', function () {
    return view('pelunasan');
});

Route::get('/venue', function () {
    return view('venue');
});
