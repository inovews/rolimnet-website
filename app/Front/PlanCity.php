<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class PlanCity extends Model
{
    //
    protected $table = 'plan_city';

	protected $fillable = ['id','name'];

	public function plan()
	{
		return $this->hasMany('App\Front\Plan');
	}
	
}
