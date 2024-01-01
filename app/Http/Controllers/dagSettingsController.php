<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dagSettingsController extends Controller
{
    public function dagSettings(){
        return view('backend.dagSettings.dagsetttings');
    }

    public function dagSettingsList(){
        return view('backend.dagSettings.dagSettingTwo');
    }
}
