<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class CostaMarques extends Model
{
    //
    protected $table = 'costa_marques';

    protected $fillable = ['name', 'address', 'number', 'neighborhood', 'phone', 'email', 'whatsapp', 'lat', 'lng'];
}
