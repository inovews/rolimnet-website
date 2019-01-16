<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Seringueiras extends Model
{
    //
    protected $table = 'seringueiras';

    protected $fillable = ['name', 'address', 'number', 'neighborhood', 'phone', 'email', 'whatsapp', 'lat', 'lng'];
}
