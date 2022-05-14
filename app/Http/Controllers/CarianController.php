<?php

namespace App\Http\Controllers;

use App\Models\Kes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CarianController extends Controller
{
    //
    public function search(Request $request)
    {
       $search = $request->get('search');
       $selectedKes = $request->get('kes');

       $kes = DB::table('kes')->where('nama_kes','like','%'.$search.'%')->paginate(2);

       $simptoms = DB::table('kes')
            ->join('simptoms','kes.kesID','=','simptoms.kesID')
            ->where('kes.kesID','=',$selectedKes)
            ->select('kes.*','simptoms.*')
            ->get();

       return view('search',compact('kes','simptoms'));
    }
}
