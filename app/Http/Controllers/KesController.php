<?php

namespace App\Http\Controllers;

use App\Models\Kes;
use App\Models\Simptom;
use App\Models\Solusi;
use Illuminate\Http\Request;

class KesController extends Controller
{
    public function index()
    {
        $kes=Kes::latest()->get();
        $simptoms=Simptom::latest()->get();
        $solusis=Solusi::latest()->get();

        return view('kes.index',compact('kes','simptoms','solusis'));
    }

    public function create()
    {
        $kes = Kes::all();
        $simptoms = Simptom::all();
        $solusis = Solusi::all();
        return view('kes.create',compact('kes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        switch ($request->input('action')) {
            case 'simpankes':
                $request->validate([

                    'nama_kes'=>'required',
                ]);

                Kes::create([

                    'nama_kes'=>request('nama_kes'),
                ]);

                return redirect ()->route('kes.create')->with('success', 'Kes berjaya disimpan');;
                break;

            case 'simpansimptom':

                $request->validate([

                    'simptom'=>'required',
                    'kesID'=>'required',
                    'solusi'=>'required',

                  ]);

                  Simptom::create([

                    'simptom'=>request('simptom'),
                    'kesID'=>request('kesID'),

                  ]);

                  Solusi::create([

                    'solusi'=>request('solusi'),
                    'kesID'=>request('kesID'),
                  ]);

                  return redirect()->route('kes.create')->with('success', 'Selected Username added successfuly');
                break;

            case 'simpansolusi':
                break;
        }
    }
    public function show(Kes $kes)
    {
        return view('kes.show',compact('kes'));
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kes $kes)
    {
        $request->validate([

            'nama_kes'=>'required',
        ]);

        $kes->nama_kes = request('nama_kes');
        $kes->save();

        return redirect()->route('kes.index');
    }

}
