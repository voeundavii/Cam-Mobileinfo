<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigateController extends Controller
{
    //
    public function mobileApp(){
        return view('navigate.mobile_app');
    }
    public function about(){
        return view('navigate.about');
    }
}
