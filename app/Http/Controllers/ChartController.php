<?php

namespace App\Http\Controllers;

use App\Models\Temujanji;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {

            $temujanjis = Temujanji::selectRaw('tarikh as date,COUNT(*) as count')->groupBy('date')->get();

            $result[] = ['tarikh', 'Jumlah pengguna'];
            foreach ($temujanjis as $temujanji) {
                $result[] = [$temujanji->date,$temujanji->count];
            }
            $data = [
                'temujanjis' => json_encode($result),
            ];

            return view('chart', $data);
    }
}
