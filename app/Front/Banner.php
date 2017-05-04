<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Banner extends Model
{
  public $timestamps = true;

  public $table = 'banners';

  public function scopeSort($query, $fields = [])
  {
    if (count($fields) <= 0) {
      $fields = [
      'status' => 'asc'
      , 'star' => 'desc'
      , 'published_at' => 'desc'
      , 'name' => 'asc'
      ];
    }

    if (request()->has('field') && request()->has('sort')) {
      $fields = [request()->get('field') => request()->get('sort')];
    }

    foreach ($fields as $field => $order) {
      $query->orderBy($field, $order);
    }
  }

  public function scopeActive($query)
  {
    $query->where('status', 'active')
    ->where('published_at', '<=', Carbon::now())
    ->where(function ($query) {
      $query->where('until_then', '>=', Carbon::now())
      ->orWhere('until_then');
    });
  }

  public function scopeIdDesc($query)
  {
  	return $query->orderBy('id','DESC');
  }


}
