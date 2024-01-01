<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class khotianController extends Controller
{
    public function emutation(){
        return view('backend.eMutation.eMutation');
    }

    public function emutationSearch(){
        return view('backend.eMutation.eMutationSearch');
    }
    public function citizenKhotian(){
        return view('backend.citizanKhotian.citizanKhotian');
    }

    public function citizenKhotianList(){
        return view('backend.citizanKhotian.citizanKhotianList');
    }

    public function citizenKhotianDetails(){
        return view('backend.citizanKhotian.citizenKhotianDetails');
    }
}
