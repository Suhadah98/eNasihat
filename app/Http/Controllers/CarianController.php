<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CarianController extends Controller
{
    //
    public function search(Request $request)
    {
       $search = $request->get('search');
       $kes = DB::table('kes')->where('nama_kes','like','%'.$search.'%')->paginate(2);
       //return view('search',['kes'=>$kes]);

       $simptoms = DB::table('kes')
            ->join('simptoms','kes.kesID','=','simptoms.kesID')
            ->select('kes.*','simptoms.*')
            ->get();

       //$simptoms = DB::table('simptoms')->where('kesID','=', DB::table('kes')->kesID) ;
       //$simptoms = Simptom::where('rut',Input::get('rut'))->get();
       return view('search',compact('kes','simptoms'));
    }
}
