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
}
