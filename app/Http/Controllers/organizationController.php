<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class organizationController extends Controller
{
    public function organizationlist(){
        return view('backend.organization.organization_list');
    }

    public function organizationCategoryList(){
        return view('backend.organization.organization_category_list');
    }

    public function organizationAdd(){
        return view('backend.organization.organization_add');
    }
}
