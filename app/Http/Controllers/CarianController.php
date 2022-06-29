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
    public function index(Request $request)
    {
        $simpans=Simpan::latest()->where('name','=',Auth::user()->name)->get();

        $simpans1=Simpan::latest()->get();

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

        return view('simpan.index',compact('simpans','simptoms','solusis','simpans1'));
    }

    public function search(Request $request)
    {

       $search = $request->get('search');
       $selectedKes = $request->get('kes');
       $selectedKes1 = $request->get('kes');

       $kes = DB::table('kes')->where('nama_kes','like','%'.$search.'%')->paginate(1);
       $kes->appends($request->all());

       $simptoms = DB::table('kes')
            ->join('simptoms','kes.id','=','simptoms.kesID')
            ->where('kes.id','=',$selectedKes)
            ->select('kes.*','simptoms.*')
            ->get();

        $solusis = DB::table('kes')
            ->join('solusis','kes.id','=','solusis.kesID')
            ->where('kes.id','=',$selectedKes1)
            ->select('kes.*','solusis.*')
            ->get();

       return view('search',compact('kes','simptoms','solusis'));

    }

    public function searchkaunselor(Request $request)
    {

       $search = $request->get('search');
       $selectedKes = $request->get('kes');
       $selectedKes1 = $request->get('kes');

       $kes = DB::table('kes')->where('nama_kes','like','%'.$search.'%')->paginate(1);
       $kes->appends($request->all());

       $simptoms = DB::table('kes')
            ->join('simptoms','kes.id','=','simptoms.kesID')
            ->where('kes.id','=',$selectedKes)
            ->select('kes.*','simptoms.*')
            ->get();

        $solusis = DB::table('kes')
            ->join('solusis','kes.id','=','solusis.kesID')
            ->where('kes.id','=',$selectedKes1)
            ->select('kes.*','solusis.*')
            ->get();

       return view('searchkaunselor',compact('kes','simptoms','solusis'));

    }

    public function searchklien(Request $request)
    {
       $search = $request->get('search');
       $selectedKes = $request->get('kes');
       $selectedKes1 = $request->get('kes');

       $kes = DB::table('kes')->where('nama_kes','like','%'.$search.'%')->paginate(2);

       $kes1 = DB::table('kes')
       ->where('kes.id','=',$selectedKes)
       ->get();

       $simptoms = DB::table('kes')
            ->join('simptoms','kes.id','=','simptoms.kesID')
            ->where('kes.id','=',$selectedKes)
            ->select('kes.*','simptoms.*')
            ->get();

        $solusis = DB::table('kes')
            ->join('solusis','kes.id','=','solusis.kesID')
            ->where('kes.id','=',$selectedKes1)
            ->select('kes.*','solusis.*')
            ->get();

       return view('searchklien',compact('kes','simptoms','solusis','kes1'));
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
        if(('name')||('kesID'))
        {
        $request->validate([

            'name'=>'required',
            'kesID'=>'required',
            'nama_kes'=>'required',
        ]);

        Simpan::updateOrCreate([

            'name'=>request('name'),
            'kesID'=>request('kesID'),
            'nama_kes'=>request('nama_kes')
        ]);


            $simpans=Simpan::latest()->where('name','=',Auth::user()->name)->get();

            $simpans1=Simpan::latest()->where('name','=',Auth::user()->name)->get();

            $simptoms = DB::table('simpans')
                ->join('simptoms','simpans.kesID','=','simptoms.kesID')
                ->select('simpans.*','simptoms.*')
                ->get();

            $solusis = DB::table('simpans')
                ->join('solusis','simpans.kesID','=','solusis.kesID')
                ->select('simpans.*','solusis.*')
                ->get();

            return view('simpan.index',compact('simpans','simptoms','solusis','simpans1'));
        }

        else{

            return redirect('searchklien')->with('alert','Sudah di simpan dalam sejarah');
        }
    }
}
