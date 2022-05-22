<?php

namespace App\Http\Controllers;

use App\Models\Temujanji;
use Illuminate\Http\Request;

class PengesahanController extends Controller
{
    //
    public function index()
    {
        $temujanjis=Temujanji::latest()->where('status','=',"-")->get();
        //return view('pengesahan.index',compact('temujanjis'));

        $temujanjis1=Temujanji::latest()->where('status','=',"Sah")->get();
        return view('pengesahan.index',compact('temujanjis','temujanjis1'));
    }

    public function show(Temujanji $temujanji)
    {

        return view('pengesahan.show',compact('temujanji'));
    }
    public function update(Request $request, Temujanji $temujanji)
    {
        $request->validate([

            'status'=>'required',
            'nama_kaunselor'=>'required',

        ]);

        $temujanji->status = request('status');
        $temujanji->nama_kaunselor = request('nama_kaunselor');
        $temujanji->save();

        return redirect()->route('pengesahan.index');
    }
}
