<?php

namespace App\Http\Controllers;

use App\Models\Temujanji;
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
        $temujanjis=Temujanji::latest()->get();
        return view('temujanji.index',compact('temujanjis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('temujanji.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

            'nama_klien'=>'required',
            'masalah'=>'required',
            'tarikh'=>'required',
        ]);

        Temujanji::create([

            'nama_klien'=>request('nama_klien'),
            'masalah'=>request('masalah'),
            'tarikh'=>request('tarikh'),
            'status'=>request('status'),
            'nama_kaunselor'=>request('nama_kaunselor'),
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
    public function show(Temujanji $temujanji)
    {

        return view('temujanji.show',compact('temujanji'));
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Temujanji $temujanji)
    {
        $request->validate([

            'nama_klien'=>'required',
            'masalah'=>'required',
            'tarikh'=>'required',
        ]);

        $temujanji->nama_klien = request('nama_klien');
        $temujanji->masalah = request('masalah');
        $temujanji->tarikh = request('tarikh');
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
