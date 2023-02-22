<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Order extends Model
{
    use HasFactory;

    public function client() {

        //return $this->belongsTo(Client::class); Relacion 1:N
        return $this->belongsToMany(Client::class); //Relacion N:N

    }
    //No funciona
    /*protected $casts = [

        'fecha' => 'datetime:d-m-Y',

    ];*/

    //SOLO FUNCIONA EN API
    /*public function Fecha(): Attribute

    {

        return new Attribute(

            fn ($value) => Carbon::parse($value)->format('d-m-Y'),
            fn ($value) => Carbon::parse($value)->format('d/m/Y')
        );

    }*/

    //protected $dateFormat = 'd-m-Y H:i:s'; 
}
