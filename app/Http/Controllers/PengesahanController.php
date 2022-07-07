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
        $temujanjis=Temujanji::latest()->where('status','=',"-")->where('nama_kaunselor','=',"-")->paginate(5);

        $temujanjis2=Temujanji::latest()->where('status','=',"Tukar")->where('nama_kaunselor','=',Auth::user()->name)->paginate(5);

        $temujanjis3=Temujanji::latest()->where('status','=',"-")->where('nama_kaunselor','=',Auth::user()->name)->paginate(5);

         $temujanjis1=Temujanji::latest()->where('status','=',"Setuju")->where('nama_kaunselor','=',Auth::user()->name)->paginate(5);
        return view('pengesahan.index',compact('temujanjis','temujanjis1','temujanjis2','temujanjis3'));
    }

    public function index1()
    {
        $temujanjis=Temujanji::latest()->where('status','=',"-")->where('nama_kaunselor','=',"-")->paginate(5);

        $temujanjis2=Temujanji::latest()->where('status','=',"Tukar")->where('nama_kaunselor','=',Auth::user()->name)->paginate(5);

        $temujanjis3=Temujanji::latest()->where('status','=',"-")->where('nama_kaunselor','=',Auth::user()->name)->paginate(5);

        $temujanjis1=Temujanji::latest()->where('status','=',"Setuju")->where('nama_kaunselor','=',Auth::user()->name)->paginate(5);

        return view('semakankaunselor.index',compact('temujanjis','temujanjis1','temujanjis2','temujanjis3'));
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
            'sesi'=>'required',

        ]);

        $temujanji->tarikh=request('tarikh');
        $temujanji->status = request('status');
        $temujanji->nama_kaunselor = request('nama_kaunselor');
        $temujanji->ulasankaunselor = request('ulasankaunselor');
        $temujanji->sesi = request('sesi');
        $temujanji->save();

        return redirect()->route('pengesahan.index');
    }
    public function show1(Temujanji $temujanji)
    {

        return view('semakankaunselor.show',compact('temujanji'));
    }
    public function update1(Request $request, Temujanji $temujanji)
    {
        $request->validate([

            'tarikh'=>'required',
            'status'=>'required',
            'nama_kaunselor'=>'required',
            'ulasankaunselor'=>'required',
            'sesi'=>'required',

        ]);

        $temujanji->tarikh=request('tarikh');
        $temujanji->status = request('status');
        $temujanji->nama_kaunselor = request('nama_kaunselor');
        $temujanji->ulasankaunselor = request('ulasankaunselor');
        $temujanji->sesi = request('sesi');
        $temujanji->save();

        return redirect()->route('semakankaunselor.index');
    }
}
