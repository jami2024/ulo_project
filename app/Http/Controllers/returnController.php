<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class returnController extends Controller
{
    public function returnList(){
        return view('backend.returnThree.returnThree');
    }
}
