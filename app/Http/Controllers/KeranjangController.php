<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{

    function total(){
        $cust = Customer::where('IdCust', session('IdCust'))->first();


        session(['IdCust' => $cust->IdCust]);
        return redirect('/otp');
    }
    public function addtocart(Request $req){
        $IdPaket = $req->input('id');
        DB::table('customer_paket')->insert(['IdCust'=>session('IdCust'),'IdPaket'=> $IdPaket]);
        return redirect()->back();
    }

}
