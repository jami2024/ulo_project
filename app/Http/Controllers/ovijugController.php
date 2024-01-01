<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ovijugController extends Controller
{
    public function ovijugList(){
        return view('backend.ovijug.ovijug');
    }

    public function ovijugListDetails(){
        return view('backend.ovijug.ovijugDetails');
    }
}
