<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Http\Models\TesModel;

class TesController extends Controller
{
    // insert 
    public function addTes(Request $request){
        $tes = new TesModel;

        $tes->nama    = $request->nama;
        $tes->umur    = $request->umur;
        $tes->whatsapp    = $request->whatsapp;
        $tes->1a    = $request->1a;
        $tes->1b    = $request->1b;
        $tes->1c    = $request->1c;
        $tes->1d    = $request->1d;
        $tes->save();
        
    }
}
