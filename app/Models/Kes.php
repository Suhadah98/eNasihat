<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kes extends Model
{
    use HasFactory;

    public $kes;

    protected $fillable = ['nama_kes'];

    public function simptoms()
    {
        return $this->hasMany(Simptom::class, 'kesID', 'simptomID');
    }
}
