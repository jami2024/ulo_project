<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paySlipController extends Controller
{
    public function paySlip(){
        return view('backend.paySlip.paySlip');
    }
}
