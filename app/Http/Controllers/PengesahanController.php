<?php

namespace App\Http\Controllers;

use App\Models\Temujanji;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PengesahanController extends Controller
{
    //
    public function index()
    {
        $temujanjis=Temujanji::latest()->get();
        //return view('pengesahan.index',compact('temujanjis'));

        $temujanjis1=Temujanji::latest()->where('status','=',"Sah")->where('nama_kaunselor','=',Auth::user()->name)->get();
        return view('pengesahan.index',compact('temujanjis','temujanjis1'));
    }

    public function show(Temujanji $temujanji)
    {

        return view('pengesahan.show',compact('temujanji'));
    }
    public function update(Request $request, Temujanji $temujanji)
    {
        $request->validate([

            'tarikh'=>'required',
            'status'=>'required',
            'nama_kaunselor'=>'required',
            'ulasankaunselor'=>'required',

        ]);

        $temujanji->tarikh=request('tarikh');
        $temujanji->status = request('status');
        $temujanji->nama_kaunselor = request('nama_kaunselor');
        $temujanji->ulasankaunselor = request('ulasankaunselor');
        $temujanji->save();

        return redirect()->route('pengesahan.index');
    }
}
