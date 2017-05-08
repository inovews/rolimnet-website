<?php

namespace App\Black;

use Illuminate\Database\Eloquent\Model;

class PlanCity extends Model
{
    //
	protected $table = 'plan_city';

	protected $fillable = ['id','name'];

	public function plan()
	{
		return $this->hasMany('App\Black\Plan');
	}
}
