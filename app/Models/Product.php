<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //meodos para añadir informacion para un llenador masivo
    protected $fillable = ['name','barcode','cost','price','stock','alerts','image','category_id'];
}
