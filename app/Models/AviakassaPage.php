<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AviakassaPage extends Model
{
    use HasTranslations;
    public $translatable = [
        'navbar_text',
        'aviakassa_h6',
        'aviakassa_h1',
        'contact_number',
    ];
}
