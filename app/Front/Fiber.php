<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Fiber extends Model
{
    //
    protected $table = 'fibers';

    protected $fillable = ['name', 'address', 'number', 'neighborhood', 'phone', 'email'];
}
