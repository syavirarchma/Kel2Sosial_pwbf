<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\kota;

class kotacontroller extends Controller
{
    public function kota(){
        $kota = kota::all();

        return view('dashboard.kota', ['kota' => $kota]);
    }
}