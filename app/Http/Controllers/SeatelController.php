<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class SeatelController extends Controller
{
    public function seatel(){
        $entertainment = Package::where('mobiles', '=', 'Seatel')
                        ->where('services', '=','Entertainment')
                        ->get();
        $plans = Package::where('mobiles', '=', 'Seatel')
                        ->where('services', '=', 'Plans')
                        ->get();
        $voice = Package::where('mobiles', '=', 'Seatel')
                        ->where('services', '=', 'Voice & Messaging')
                        ->get();
        $other = Package::where('mobiles', '=', 'Seatel')
                        ->where('services', '=', 'Other')
                        ->get();
        return view('Company Service.seatel', compact(['entertainment', 'plans', 'voice', 'other']));
    }
}
