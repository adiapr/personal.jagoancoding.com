<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TesModel;
use RealRashid\SweetAlert\Facades\Alert;

class TesController extends Controller
{
    // insert 
    public function addTes(Request $request){
        $tes = new TesModel;

        $this->validate($request,[
            'whatsapp'  => 'required|unique:table_minat'
        ]);

        $tes->nama    = $request->nama;
        $tes->umur    = $request->umur;
        $tes->whatsapp    = $request->whatsapp;
        $tes->a1    = $request->a1;
        $tes->b1    = $request->b1;
        $tes->c1    = $request->c1;
        $tes->d1    = $request->d1;
        $tes->a2    = $request->a2;
        $tes->b2    = $request->b2;
        $tes->c2    = $request->c2;
        $tes->d2    = $request->d2;
        $tes->a3    = $request->a3;
        $tes->b3    = $request->b3;
        $tes->c3    = $request->c3;
        $tes->d3    = $request->d3;
        $tes->a4    = $request->a4;
        $tes->b4    = $request->b4;
        $tes->c4    = $request->c4;
        $tes->d4    = $request->d4;
        $tes->a5    = $request->a5;
        $tes->b5    = $request->b5;
        $tes->c5    = $request->c5;
        $tes->d5    = $request->d5;
        $tes->a6    = $request->a6;
        $tes->b6    = $request->b6;
        $tes->c6    = $request->c6;
        $tes->d6    = $request->d6;
        $tes->a7    = $request->a7;
        $tes->b7    = $request->b7;
        $tes->c7    = $request->c7;
        $tes->d7    = $request->d7;
        $tes->a8    = $request->a8;
        $tes->b8    = $request->b8;
        $tes->c8    = $request->c8;
        $tes->d8    = $request->d8;
        $tes->save();

        toast('Data Berhasil Dikirim!','success');

        return redirect('/');
        
    }

    public function cariHasil(Request $request){
        $keyword = $request->whatsapp;
        $data = TesModel::where('whatsapp','=',$keyword)->get();

        $jml = $data->a1 + $data->a2;

        return view('/hasil', compact('data','jml'));
    }
}
