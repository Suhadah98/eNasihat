<?php

namespace App\Http\Controllers;

use App\Models\Kes;
use App\Models\Simptom;
use Illuminate\Http\Request;

class KesController extends Controller
{

    public function create()
    {
        return view('kes.create');
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

            'nama_kes'=>'required',

        ]);

        Kes::create([

            'nama_kes'=>request('nama_kes'),
        ]);

        return redirect ()->route('kes.create');
    }


}
