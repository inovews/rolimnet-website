<?php

namespace App\Front;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
    protected $table = 'faqs';

    protected $fillable = [
        'user_id', 'title', 'html_content', 'active',
    ];
}
