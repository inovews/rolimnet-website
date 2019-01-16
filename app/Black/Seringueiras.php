<?php

namespace App\Black;

use Illuminate\Database\Eloquent\Model;

class Seringueiras extends Model
{
    //
    protected $table = 'seringueiras';

    protected $fillable = ['id', 'installed'];
}
