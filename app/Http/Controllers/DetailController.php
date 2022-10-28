<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function detail($id){
        $detail = Package::find($id);
        return view('detail.detail_page', compact('detail'));
    }
}
