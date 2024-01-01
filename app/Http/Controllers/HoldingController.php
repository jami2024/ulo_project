<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoldingController extends Controller
{
    public function holdingRegistrationOne(){
        return view('backend.registrationOne.registrationOne');
    }
    public function holdingRegistrationTwo(){
        return view('backend.khotianRegistrationtwo.khotianRegistrationtwo');
    }
    public function holdingRegistrationThree(){
        return view('backend.khotianRegistrationThree.KhotianRegistrationThree');
    }

    public function holdingWaiting(){
        return view('backend.opekhhamanHolding.opekhhamanHolding');
    }
    public function holdingWaitingTwo(){
        return view('backend.opekhhamanHolding.opekkhamanHoldingTwo');
    }

    public function holdingAcceptedList(){
        return view('backend.acceptedHolding.acceptedHoldingOne');
    }

    public function holdingAcceptedListTwo(){
        return view('backend.acceptedHolding.acceptedHoldingTwo');
    }

    public function holdingAcchiveList(){
        return view('backend.archiveHolding.archiveHoldingOne');
    }

    public function holdingAcchiveListTwo(){
        return view('backend.archiveHolding.archiveHoldingTwo');
    }
}
