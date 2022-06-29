<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temujanji extends Model
{
    use HasFactory;

    protected $fillable = ['nama_klien','masalah','tarikh','status','nama_kaunselor','ulasan','ulasankaunselor','kategorikes','nama_kes','sesi'];
}
