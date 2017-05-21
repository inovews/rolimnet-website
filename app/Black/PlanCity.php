<?php

namespace App\Black;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class PlanCity extends Model
{
    //
    use Sluggable;

	protected $table = 'plan_city';

	protected $fillable = ['id','name', 'slug'];

	public function plan()
	{
		return $this->hasMany('App\Black\Plan');
	}

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
