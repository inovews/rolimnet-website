<?php

namespace App\Black;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //

    protected $table = 'banners';

    protected $fillable = ['name', 'status', 'star', 'place', 'slug', 'price', 'description', 'subdescription', 'published_at', 'until_then', 'target',
    ];
}
