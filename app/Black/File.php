<?php

namespace App\Black;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $table = 'files';

    protected $fillable = [
        'name', 'file', 'key', 'type', 
    ];
}
