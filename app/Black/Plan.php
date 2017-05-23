<?php

namespace App\Black;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = 'plans';

    protected $fillable = ['name', 'price', 'featured', 'slug', 'zone', 'plan_city_id'];

    public function plan_city()
    {
    	return $this->belongsTo('App\Black\PlanCity', 'plan_city_id', 'id');
    }
}
