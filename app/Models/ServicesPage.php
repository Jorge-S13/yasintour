<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ServicesPage extends Model
{
    use HasTranslations;
    public $translatable = [
        'navbar_text',
        'services_h6',
        'services_h1',
        'item1_h5',
        'item1_p',
        'item2_h5',
        'item2_p',
        'item3_h5',
        'item3_p',
        'item4_h5',
        'item4_p',
        'item5_h5',
        'item5_p',
        'item6_h5',
        'item6_p',
        'item7_h5',
        'item7_p',
        'item8_h5',
        'item8_p',
    ];
}
