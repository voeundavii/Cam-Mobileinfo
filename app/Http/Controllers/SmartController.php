<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class SmartController extends Controller
{
    public function smart(){
        $entertainment = Package::where('mobiles', '=', 'Smart')
                        ->where('services', '=','Entertainment')
                        ->get();
        $plans = Package::where('mobiles', '=', 'Smart')
                        ->where('services', '=', 'Plans')
                        ->get();
        $voice = Package::where('mobiles', '=', 'Smart')
                        ->where('services', '=', 'Voice & Messaging')
                        ->get();
        $other = Package::where('mobiles', '=', 'Smart')
                        ->where('services', '=', 'Other')
                        ->get();
        return view('Company Service.smart', compact(['entertainment', 'plans', 'voice', 'other']));
    }
}
