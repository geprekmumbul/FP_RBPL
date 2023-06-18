<?php

use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\DB;
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
Route::get('/logout', function () {
    session(['LoggedIn' => false]);
    return redirect('/login');
});

Route::get('/login', function () {
    if(session('LoggedIn')) return redirect('/katalog');
    return view('login');
});

Route::post('/addtocart', [KeranjangController::class, 'addtocart'])->name('addtocart');




Route::post('/login', [LoginController::class, 'login']);
Route::post('/otp', [LoginController::class, 'otp']);
Route::get('/otp', function () { return view('otp');});

Route::get('/katalog'      , function () {return view('katalog');});
Route::get('/venue'        , function () {return view('katalog');});
Route::get('/catering'     , function () {return view('katalog');});
Route::get('/decoration'   , function () {return view('katalog');});
Route::get('/photography'  , function () {return view('katalog');});
Route::get('/entertainment', function () {return view('katalog');});

Route::post('/settings' , [LoginController::class, 'update']);
Route::get('/settings' , function () {return view('settings');});
Route::get('/keranjang', function () {return view('keranjang');});
Route::get('/bayar'    , function () {return view('bayar');});
Route::get('/confirm'  , function () {
    $cust = App\Models\Customer::where('IdCust', session('IdCust'))->first();
    $id = $cust->IdCust;
    $status = $cust->Status;
    if($status == "AWAL"){
        DB::update('update Customer set Status = ? where IdCust = ?',['DP', $id]);
    } else if($status == 'DP') {
        DB::update('update Customer set Status = ? where IdCust = ?',['LUNAS', $id]);
    }
    return view('confirm');
});

