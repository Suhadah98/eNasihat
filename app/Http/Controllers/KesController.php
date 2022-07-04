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
        $kes=Kes::latest()->paginate(5);
        $simptoms=Simptom::latest()->paginate(5);
        $solusis=Solusi::latest()->paginate(5);

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

                return redirect ()->route('kes.create')->with('success1', 'Kes berjaya disimpan');
                break;

            case 'simpansimptom':

                $request->validate([

                    'simptom'=>'required',
                    'id'=>'required',
                    'solusi'=>'required',

                  ]);

                  Simptom::create([

                    'simptom'=>request('simptom'),
                    'kesID'=>request('id'),

                  ]);

                  Solusi::create([

                    'solusi'=>request('solusi'),
                    'kesID'=>request('id'),
                  ]);

                  return redirect()->route('kes.create')->with('success', 'Solusi dah Simptom berjaya di tambah');
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
    public function delete(Kes $kes)
    {
        return view('kes.delete',compact('kes'));
    }

    public function destroy(Kes $kes)
    {

        try{


        $kes->delete();

        return redirect()->route('kes.index')->with('success','kes berjaya dipadam');
        }
        catch(Throwable $e){

        return redirect()->route('kes.delete')->with('fail','tidak dibenarkan memadam kes');

        }
    }

    public function index1()
    {
        $kes=Kes::latest()->paginate(5);
        $simptoms=Simptom::latest()->paginate(5);
        $solusis=Solusi::latest()->paginate(5);

        return view('keskaunselor.index',compact('kes','simptoms','solusis'));
    }

    public function create1()
    {
        $kes = Kes::all();
        $simptoms = Simptom::all();
        $solusis = Solusi::all();
        return view('keskaunselor.create',compact('kes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        switch ($request->input('action')) {
            case 'simpankes':
                $request->validate([

                    'nama_kes'=>'required',
                ]);

                Kes::create([

                    'nama_kes'=>request('nama_kes'),
                ]);

                return redirect ()->route('keskaunselor.create')->with('success1', 'Kes berjaya disimpan');
                break;

            case 'simpansimptom':

                $request->validate([

                    'simptom'=>'required',
                    'id'=>'required',
                    'solusi'=>'required',

                  ]);

                  Simptom::create([

                    'simptom'=>request('simptom'),
                    'kesID'=>request('id'),

                  ]);

                  Solusi::create([

                    'solusi'=>request('solusi'),
                    'kesID'=>request('id'),
                  ]);

                  return redirect()->route('keskaunselor.create')->with('success', 'Solusi dah Simptom berjaya di tambah');
                break;

            case 'simpansolusi':
                break;
        }
    }
    public function show1(Kes $kes)
    {
        return view('keskaunselor.show',compact('kes'));
    }
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kes
     * @return \Illuminate\Http\Response
     */
    public function update1(Request $request, Kes $kes)
    {
        $request->validate([

            'nama_kes'=>'required',
        ]);

        $kes->nama_kes = request('nama_kes');
        $kes->save();

        return redirect()->route('keskaunselor.index');
    }
    public function delete1(Kes $kes)
    {
        return view('keskaunselor.delete',compact('kes'));
    }

    public function destroy1(Kes $kes)
    {

        try{


        $kes->delete();

        return redirect()->route('keskaunselor.index')->with('success','kes berjaya dipadam');
        }
        catch(Throwable $e){

        return redirect()->route('keskaunselor.delete')->with('fail','tidak dibenarkan memadam kes');

        }
    }


}
