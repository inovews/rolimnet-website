<?php

namespace App\Black;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
    protected $table = 'faqs';

    protected $fillable = [
        'user_id', 'file', 'title', 'status', 'category_id', 'slug', 'content', 'html_content', 'description',
    ];

}
