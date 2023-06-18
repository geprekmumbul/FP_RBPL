<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\PIC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    function login(Request $req){
        $req->validate([
            'telepon' => 'required|regex:/[0-9]{9}/'
        ]);
        $telp = $req->input('telepon');

        $cust = Customer::where('NomorCust', $telp)->first();
        if($cust != null){
            session(['IsNew' => false]);
        } else {
            $cust = Customer::create([
                'IdPIC' => fake()->randomElement(PIC::pluck('IdPIC')),
                'NomorCust' => $telp,
                'Status' => 'AWAL']);
            $cust->save();
            session(['IsNew' => true]);
        }

        session(['IdCust' => ($cust->IdCust)]);
        return redirect('/otp');

       // 'mobile_number' => ['required', 'digits:10'],
    }
    function otp(Request $req){
        $data = [
            $req->input('digit1'),
            $req->input('digit2'),
            $req->input('digit3'),
            $req->input('digit4')
        ];
        if($data == [1,2,3,4]){
            session(['LoggedIn' => true]);
            return redirect('/katalog');
        }
        return redirect('/otp');
    }
    function update(Request $req){
        $NamaSuami = $req->input('NamaSuami');
        $NamaIstri = $req->input('NamaIstri');
        $Tanggal   = $req->input('TanggalPernikahan');
        $Lokasi    = $req->input('LokasiPernikahan');

        DB::update('update Customer set NamaSuami = ?, NamaIstri = ?, Lokasi = ?, Tanggal = ?
                where IdCust = ?',[$NamaSuami, $NamaIstri, $Lokasi, $Tanggal, session('IdCust')]);
        return redirect('/katalog');
    }
}
