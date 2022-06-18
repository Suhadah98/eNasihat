<?php

namespace App\Http\Controllers;

use App\Models\Kes;
use App\Models\Simptom;
use App\Models\Solusi;
use Illuminate\Http\Request;

class SolusiController extends Controller
{
    public function show(Solusi $solusis)
    {
        return view('solusi.show',compact('solusis'));
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solusi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solusi $solusis)
    {
        $request->validate([

            'solusi'=>'required',
            'kesID'=>'required',
        ]);

        $solusis->simptom = request('simptom');
        $solusis->kesID = request('kesID');
        $solusis->save();

        return redirect()->route('kes.index');
    }
    public function delete(Solusi $solusis)
    {
        return view('solusi.delete',compact('solusis'));
    }

    public function destroy(Solusi $solusis)
    {

        $solusis->delete();

        return redirect()->route('kes.index');
    }
}
