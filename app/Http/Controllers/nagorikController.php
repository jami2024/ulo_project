<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nagorikController extends Controller
{
    public function nagorikInfo(){
        return view('backend.nagorik.nagorikInfo');
    }
}
