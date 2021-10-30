<?php

namespace App\Http\Controllers;

use App\Models\kategori_bencana;
use Illuminate\Http\Request;

class kategori_bencanacontroller extends Controller
{
    public function kategori_bencana(){
        $kategori_bencana = kategori_bencana::all();

        return view('dashboard.kategori_bencana', ['kategori_bencana' => $kategori_bencana]);
    }
}