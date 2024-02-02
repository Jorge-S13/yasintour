<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ContactPage extends Model
{
    use HasTranslations;
    public $translatable = [
        'navbar_text',
        'contact_h6',
        'contact_h1',
        'contact_h5_office',
        'contact_h5_phone',
    ];
}
