<?php

namespace App\Http\Controllers;

use App\Models\Kes;
use App\Models\Simptom;
use App\Models\Solusi;
use Illuminate\Http\Request;


class SimptomController extends Controller
{
    public function show(Simptom $simptoms)
    {
        return view('simptom.show',compact('simptoms'));
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Simptom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simptom $simptoms)
    {
        $request->validate([

            'simptom'=>'required',
            'kesID'=>'required',
        ]);

        $simptoms->simptom = request('simptom');
        $simptoms->kesID = request('kesID');
        $simptoms->save();

        return redirect()->route('kes.index');
    }
    public function delete(Simptom $simptoms)
    {
        return view('simptom.delete',compact('simptoms'));
    }

    public function destroy(Simptom $simptoms)
    {

        $simptoms->delete();

        return redirect()->route('kes.index');
    }
}
