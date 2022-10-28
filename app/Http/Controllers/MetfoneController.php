<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class MetfoneController extends Controller
{
    public function metfone(){
        $entertainment = Package::where('mobiles', '=', 'Metfone')
                        ->where('services', '=','Entertainment')
                        ->get();
        $plans = Package::where('mobiles', '=', 'Metfone')
                        ->where('services', '=', 'Plans')
                        ->get();
        $voice = Package::where('mobiles', '=', 'Metfone')
                        ->where('services', '=', 'Voice & Messaging')
                        ->get();
        $other = Package::where('mobiles', '=', 'Metfone')
                        ->where('services', '=', 'Other')
                        ->get();
        return view('Company Service.metfone', compact(['entertainment', 'plans', 'voice', 'other']));
    }
}
