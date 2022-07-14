<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    use HasFactory;

    //meodos para añadir informacion para un llenador masivo
    protected $fillable = ['type','value','image'];
}
