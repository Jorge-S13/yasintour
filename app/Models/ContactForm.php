<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ContactForm extends Model
{
    use HasTranslations;

    public $translatable = [
        'name',
        'email',
        'phone',
        'description',
        'button',
    ];
}
