<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
class CellcardController extends Controller
{
    public function cellcard(){
        $entertainment = Package::where('mobiles', '=', 'Cellcard')
                        ->where('services', '=','Entertainment')
                        ->get();
        $plans = Package::where('mobiles', '=', 'Cellcard')
                        ->where('services', '=', 'Plans')
                        ->get();
        $voice = Package::where('mobiles', '=', 'Cellcard')
                        ->where('services', '=', 'Voice & Messaging')
                        ->get();
        $other = Package::where('mobiles', '=', 'Cellcard')
                        ->where('services', '=', 'Other')
                        ->get();
        return view('Company Service.cellcard', compact(['entertainment', 'plans', 'voice', 'other']));
    }
}
