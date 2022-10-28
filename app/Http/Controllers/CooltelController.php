<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class CooltelController extends Controller
{
    public function cooltel(){
        $entertainment = Package::where('mobiles', '=', 'CooTel')
                        ->where('services', '=','Entertainment')
                        ->get();
        $plans = Package::where('mobiles', '=', 'CooTel')
                        ->where('services', '=', 'Plans')
                        ->get();
        $voice = Package::where('mobiles', '=', 'CooTel')
                        ->where('services', '=', 'Voice & Messaging')
                        ->get();
        $other = Package::where('mobiles', '=', 'CooTel')
                        ->where('services', '=', 'Other')
                        ->get();
        return view('Company Service.cooltel', compact(['entertainment', 'plans', 'voice', 'other']));
    }
}
