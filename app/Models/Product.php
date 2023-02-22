<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    protected $fillable = ["nombre", "descripcion", "precio"];

    //mutator -> set
    //accesor -> get

   /* protected function Nombre(): Attribute {

        return new Attribute(

            fn ($value) => strtoupper($value),
            fn ($value) => ucfirst(strtolower($value)),

        );

    } */

    public function setNombreAttribute($value)
    {

        $this->attributes['nombre'] = ucfirst(strtoupper($value));

    }

    public function getNombreAttribute($value) {

        return strtoupper($value);

    }

      

}
