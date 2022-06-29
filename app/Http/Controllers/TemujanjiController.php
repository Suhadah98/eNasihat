<?php

namespace App\Http\Controllers;

use App\Models\Kes;
use App\Models\Temujanji;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TemujanjiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kes=Kes::latest()->get();

        $temujanjis=Temujanji::latest()->where('status','=',"-")->where('nama_klien','=',Auth::user()->name)->get();


        $temujanjis2=Temujanji::latest()->where('status','=',"Tukar")->where('nama_klien','=',Auth::user()->name)->get();


        $temujanjis1=Temujanji::latest()->where('status','=',"Setuju")->where('nama_klien','=',Auth::user()->name)->get();
        return view('temujanji.index',compact('temujanjis','temujanjis1','temujanjis2','kes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $kes = Kes::all();
        $temujanjis=Temujanji::all();
        return view('temujanji.create',compact('temujanjis','kes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Kes $kes)
    {

        $kes=Kes::latest()->get();

        $request->validate([

            'nama_klien'=>'required',
            'masalah'=>'required',
            'status'=>'required',
            'ulasan'=>'required',
            'kategorikes'=>'required',
            'nama_kes'=>'required',
        ]);

        Temujanji::create([

            'nama_klien'=>request('nama_klien'),
            'masalah'=>request('masalah'),
            'tarikh'=>request('tarikh'),
            'status'=>request('status'),
            'nama_kaunselor'=>request('nama_kaunselor'),
            'ulasan'=>request('ulasan'),
            'ulasankaunselor'=>request('ulasankaunselor'),
            'kategorikes'=>request('kategorikes'),
            'nama_kes'=>request('kategorikes'),
            'sesi'=>request('sesi'),
        ]);

        return redirect ()->route('temujanji.index');
    }

    public function delete(Temujanji $temujanji)
    {
        return view('temujanji.delete',compact('temujanji'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temujanji  $temujanji
     * @return \Illuminate\Http\Response
     */
    public function show(Temujanji $temujanji,Kes $kess)
    {
        $kess=Kes::latest()->get();

        return view('temujanji.show',compact('temujanji','kess'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temujanji  $temujanji
     * @return \Illuminate\Http\Response
     */
    public function edit(Temujanji $temujanji)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Temujanji  $temujanji
     * @param  \App\Models\Kes  $kess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temujanji $temujanji,Kes $kes)
    {

        $request->validate([

            'nama_klien'=>'required',
            'masalah'=>'required',
            'status'=>'required',
            'ulasan'=>'required',
            'kategorikes'=>'required',
        ]);

        $temujanji->nama_klien = request('nama_klien');
        $temujanji->masalah = request('masalah');
        $temujanji->ulasan= request('ulasan');
        $temujanji->status= request('status');
        $temujanji->kategorikes= request('kategorikes');

        $temujanji->save();

        return redirect()->route('temujanji.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temujanji  $temujanji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temujanji $temujanji)
    {

        $temujanji->delete();

        return redirect()->route('temujanji.index');
    }
}
