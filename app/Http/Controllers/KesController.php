<?php

namespace App\Http\Controllers;

use App\Models\Kes;
use App\Models\Simptom;
use App\Models\Solusi;
use Illuminate\Http\Request;

class KesController extends Controller
{


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
}
