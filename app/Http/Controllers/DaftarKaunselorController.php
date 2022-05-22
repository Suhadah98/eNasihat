<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;


class DaftarKaunselorController extends Controller
{
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {

        return view('daftar.create');
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
            'email'=>'required',
            'password'=>'required',
        ]);

        User::create([

            'name'=>request('name'),
            'email'=>request('email'),
            'user_type'=>'Kaunselor',
            'password'=>Hash::make(request('password')),

        ]);

        return redirect ()->route('daftar.create');
    }
}
