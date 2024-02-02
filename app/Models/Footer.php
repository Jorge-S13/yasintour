<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Footer extends Model
{
    use HasTranslations;

    public $translatable = [
        'about',
        'contact',
        'information',
    ];
}
