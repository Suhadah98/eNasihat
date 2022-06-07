<?php

namespace App\Http\Controllers;

use App\Models\Simpan;
use App\Models\Kes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CarianController extends Controller
{
    //
    public function index()
    {
        $simpans=Simpan::latest()->where('name','=',Auth::user()->name)->get();

        $simptoms = DB::table('simpans')
        ->join('simptoms','simpans.kesID','=','simptoms.kesID')
        ->select('simpans.*','simptoms.*')
        ->get();

        $solusis = DB::table('simpans')
        ->join('solusis','simpans.kesID','=','solusis.kesID')
        ->select('simpans.*','solusis.*')
        ->get();

        return view('simpan.index',compact('simpans','simptoms','solusis'));
    }

    public function search(Request $request)
    {

       $search = $request->get('search');
       $selectedKes = $request->get('kes');
       $selectedKes1 = $request->get('kes');

       $kes = DB::table('kes')->where('nama_kes','like','%'.$search.'%')->paginate(1);
       $kes->appends($request->all());

       $simptoms = DB::table('kes')
            ->join('simptoms','kes.kesID','=','simptoms.kesID')
            ->where('kes.kesID','=',$selectedKes)
            ->select('kes.*','simptoms.*')
            ->get();

        $solusis = DB::table('kes')
            ->join('solusis','kes.kesID','=','solusis.kesID')
            ->where('kes.kesID','=',$selectedKes1)
            ->select('kes.*','solusis.*')
            ->get();

       return view('search',compact('kes','simptoms','solusis'));

    }

    public function searchklien(Request $request)
    {
       $search = $request->get('search');
       $selectedKes = $request->get('kes');
       $selectedKes1 = $request->get('kes');

       $kes = DB::table('kes')->where('nama_kes','like','%'.$search.'%')->paginate(2);

       $simptoms = DB::table('kes')
            ->join('simptoms','kes.kesID','=','simptoms.kesID')
            ->where('kes.kesID','=',$selectedKes)
            ->select('kes.*','simptoms.*')
            ->get();

        $solusis = DB::table('kes')
            ->join('solusis','kes.kesID','=','solusis.kesID')
            ->where('kes.kesID','=',$selectedKes1)
            ->select('kes.*','solusis.*')
            ->get();

       return view('searchklien',compact('kes','simptoms','solusis'));
    }
    public function create()
    {

        return view('simpan.create');
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

            'name'=>'required',
            'kesID'=>'required',
            'nama_kes'=>'required',
        ]);

        Simpan::create([

            'name'=>request('name'),
            'kesID'=>request('kesID'),
            'nama_kes'=>request('nama_kes')
        ]);

        $simpans=Simpan::latest()->get();

        $simptoms = DB::table('simpans')
            ->join('simptoms','simpans.kesID','=','simptoms.kesID')
            ->select('simpans.*','simptoms.*')
            ->get();

        $solusis = DB::table('simpans')
            ->join('solusis','simpans.kesID','=','solusis.kesID')
            ->select('simpans.*','solusis.*')
            ->get();

        return view('simpan.index',compact('simpans','simptoms','solusis'));

    }
}
