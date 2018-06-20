<?php

namespace App\Black;

use Illuminate\Database\Eloquent\Model;

class CostaMarques extends Model
{
    //
    protected $table = 'costa_marques';

    protected $fillable = ['id', 'installed'];
}
