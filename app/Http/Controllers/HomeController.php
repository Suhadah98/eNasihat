<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temujanji;
use App\Models\Kes;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $temujanjis=Temujanji::latest()->where('status','=','setuju')->where('nama_klien','=',Auth::user()->name)
        ->where('sesi','=','Belum Selesai')->get();

        $kes=Kes::paginate(1);

        $data2 = DB::table('temujanjis')
        ->select(
            DB::raw('nama_kes as nama_kes'),
            DB::raw('count(*) as number'))
        ->groupBy('nama_kes')
        ->get();

        $array[]=['nama_kes','Number'];
        foreach($data2 as $key => $value)
        {
         $array[++$key]=[$value->nama_kes,$value->number];
        }

            return view('home',$data2,compact('kes','temujanjis'))->with('nama_kes',json_encode(
            $array));
    }

    public function adminHome()
    {

        $jumlahklien=DB::table('users')->where('user_type', '=', '')->orWhereNull('user_type')->count();;
        $jumlahkliensetuju=DB::table('temujanjis')->where('status', '=', "Setuju")->count();;
        $jumlahklientunda=DB::table('temujanjis')->where('status', '=', "Tukar")->count();;
        $jumlahklienselesai=DB::table('temujanjis')->where('sesi', '=', "Selesai")->count();;

        $temujanjis = Temujanji::select(DB::raw("(COUNT(*)) as count"),DB::raw("MONTHNAME(tarikh) as monthname"))
        ->whereYear('tarikh', date('Y'))
        ->groupBy('monthname')
        ->get();

        $result[] = ['Bulan', 'Jumlah temujanji'];
        foreach ($temujanjis as $temujanji) {
            $result[] = [$temujanji->monthname,$temujanji->count];
        }
        $data = [
            'temujanjis' => json_encode($result),
        ];

        $kes=Kes::latest()->get();

        $data1 = DB::table('temujanjis')
        ->select(
            DB::raw('nama_kes as nama_kes'),
            DB::raw('count(*) as number'))
        ->groupBy('nama_kes')
        ->get();

        $array[]=['nama_kes','Number'];
        foreach($data1 as $key => $value)
        {
         $array[++$key]=[$value->nama_kes,$value->number];
        }

            return view('admin-home',$data,compact('kes','jumlahklien','jumlahklientunda','jumlahkliensetuju','jumlahklienselesai'))->with('nama_kes',json_encode(
            $array));
    }

    public function kaunselorHome()
    {
        $jumlahklien=DB::table('users')->where('user_type', '=', '')->orWhereNull('user_type')->count();;
        $jumlahkliensetuju=DB::table('temujanjis')->where('status', '=', "Setuju")->count();;
        $jumlahklientunda=DB::table('temujanjis')->where('status', '=', "Tukar")->count();;
        $jumlahklienselesai=DB::table('temujanjis')->where('sesi', '=', "Selesai")->count();;


        $temujanjis = Temujanji::select(DB::raw("(COUNT(*)) as count"),DB::raw("MONTHNAME(tarikh) as monthname"))
        ->whereYear('tarikh', date('Y'))
        ->groupBy('monthname')
        ->get();

        $result[] = ['Bulan', 'Jumlah temujanji'];
        foreach ($temujanjis as $temujanji) {
            $result[] = [$temujanji->monthname,$temujanji->count];
        }
        $data = [
            'temujanjis' => json_encode($result),
        ];

        $kes=Kes::latest()->get();

        $data1 = DB::table('temujanjis')
        ->select(
            DB::raw('nama_kes as nama_kes'),
            DB::raw('count(*) as number'))
        ->groupBy('nama_kes')
        ->get();

        $array[]=['nama_kes','Number'];
        foreach($data1 as $key => $value)
        {
         $array[++$key]=[$value->nama_kes,$value->number];
        }

            return view('kaunselor-home',$data,compact('kes','jumlahklien','jumlahklientunda','jumlahkliensetuju','jumlahklienselesai'))->with('nama_kes',json_encode(
            $array));
    }
}
