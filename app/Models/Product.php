<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    protected $fillable = ["nombre", "descripcion", "precio"];

    //mutator -> set
    //accesor -> get
    public function setNombreAttribute($value)
    {

        $this->attributes['nombre'] = ucfirst(strtoupper($value));

    }

}
