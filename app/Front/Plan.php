<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = 'plans';

    protected $fillable = ['name', 'price', 'slug', 'zone', 'plan_city_id'];

    public function city()
    {
        return $this->belongsTo('App\Front\PlanCity', 'plan_city_id');
    }
}
