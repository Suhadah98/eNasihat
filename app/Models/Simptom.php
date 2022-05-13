<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simptom extends Model
{
    use HasFactory;

    protected $fillable = ['simptomID','simptom','kesID'];

}
