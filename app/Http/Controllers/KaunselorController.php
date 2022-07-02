<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class KaunselorController extends Controller
{
    public function index()
    {
        $users=User::latest()->where('user_type','=','Kaunselor')->get();

            return view('senaraikaunselor',compact('users'));
    }
}
