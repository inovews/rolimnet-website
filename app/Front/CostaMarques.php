<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class CostaMarques extends Model
{
    //
    protected $table = 'costa_maques';

    protected $fillable = ['name', 'address', 'number', 'neighborhood', 'phone', 'email'];
}
