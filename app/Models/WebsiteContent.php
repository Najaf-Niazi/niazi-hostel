<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteContent extends Model
{
    protected $fillable = [
        'home_heading',
        'home_description',
        'home_image',

        'about_heading',
        'about_description',
        'about_image',

        'phone',
        'email',
        'address',
    ];
}