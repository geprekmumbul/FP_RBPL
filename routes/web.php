<?php

use App\Http\Controllers\LoginController;
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

Route::get('/tes', function () {
    return view('tes');
});


Route::get('/', function () {
    if(session('LoggedIn')) return redirect('/katalog');
    return redirect('/login');
});


Route::get('/login', function () {
    if(session('LoggedIn')) return redirect('/katalog');
    return view('login');
});

Route::post('/login', [LoginController::class, 'login']);
Route::post('/otp', [LoginController::class, 'otp']);
Route::get('/otp', function () { return view('otp');});

Route::get('/katalog'      , function () {return view('layanan');});
Route::get('/venue'        , function () {return view('layanan');});
Route::get('/catering'     , function () {return view('layanan');});
Route::get('/decoration'   , function () {return view('layanan');});
Route::get('/photography'  , function () {return view('layanan');});
Route::get('/entertainment', function () {return view('layanan');});

Route::get('/bayardp', function () {
    return view('bayardp');
});

Route::get('/bayarpelunasan', function () {
    return view('bayarpelunasan');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/konfirmasidp', function () {
    return view('confirmdp');
});

Route::get('/downpayment', function () {
    return view('downpayment');
});

Route::get('/konfirmasipelunasan', function () {
    return view('confirmpelunasan');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/pelunasan', function () {
    return view('pelunasan');
});
