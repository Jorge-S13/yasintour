<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CountryPage extends Model
{
    use HasTranslations;
    public $translatable = [
        'navbar_text',
        'country_h6',
        'button',
    ];
}
