<?php

namespace App\Black;

use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;

class Faq extends Model
{
    //
    use Sluggable;

    protected $table = 'faqs';

    protected $fillable = [
        'user_id', 'file', 'title', 'status', 'category_id', 'slug', 'content', 'html_content', 'description',
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}
