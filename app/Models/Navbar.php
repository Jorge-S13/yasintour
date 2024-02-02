<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Navbar extends Model
{
    use HasTranslations;

    public $translatable = [
        'main',
        'counties',
        'tours',
        'aviakassa',
        'services',
        'about',
        'contact',
    ];
}
