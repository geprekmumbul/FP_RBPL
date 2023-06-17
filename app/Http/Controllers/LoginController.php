<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\PIC;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function login(Request $req){
        $telp =  $req->validate([
            'telepon' => 'required|regex:/[0-9]{9}/'
        ]);
        $cust = Customer::where('NomorCust', $telp)->first();
        if($cust != null){
            $cust = $cust->get();
            session(['IsNew' => false]);
        } else {
            $cust = new Customer([
                'IdPIC' => fake()->randomElement(PIC::pluck('IdPIC')),
                'NomorCust' => $telp,
                'Status' => 'AWAL']);
            $cust->save();
            session(['IsNew' => true]);
        }
        session(['IdCust' => $cust->IdCust]);
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
}
