<?php

namespace App\Http\Controllers;

use App\Models\Simptom;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CarianController extends Controller
{
    //
    public function search(Request $request)
    {
       $search = $request->get('search');
       $kes = DB::table('kes')->where('nama_kes','like','%'.$search.'%')->paginate(2);
       return view('search',['kes'=>$kes]);

       $simptoms = DB::table('simptoms')->where('kesID','like', DB::table('kes')->kesID)->find(Request('simptomID'));
       return view('search',compact('kes','simptoms'));
    }
}
