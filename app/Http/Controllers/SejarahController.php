<?php

namespace App\Http\Controllers;

use App\Models\Simpan;
use App\Models\Kes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index(Request $request)
    {
        $simpans=Simpan::latest()->get();

        $selectedKes=$request->get('kes');

        $simptoms = DB::table('kes')
        ->join('simptoms','kes.id','=','simptoms.kesID')
        ->where('kes.id','=',$selectedKes)
        ->select('kes.*','simptoms.*')
        ->get();

        $solusis = DB::table('kes')
        ->join('solusis','kes.id','=','solusis.kesID')
        ->where('kes.id','=',$selectedKes)
        ->select('kes.*','solusis.*')
        ->get();

        return view('sejarahkaunselor',compact('simpans','simptoms','solusis'));
    }

    public function index1(Request $request)
    {
        $simpans=Simpan::latest()->get();

        $selectedKes=$request->get('kes');

        $simptoms = DB::table('kes')
        ->join('simptoms','kes.id','=','simptoms.kesID')
        ->where('kes.id','=',$selectedKes)
        ->select('kes.*','simptoms.*')
        ->get();

        $solusis = DB::table('kes')
        ->join('solusis','kes.id','=','solusis.kesID')
        ->where('kes.id','=',$selectedKes)
        ->select('kes.*','solusis.*')
        ->get();

        return view('sejarahadmin',compact('simpans','simptoms','solusis'));
    }
}
