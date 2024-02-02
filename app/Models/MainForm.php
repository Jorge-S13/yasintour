<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MainForm extends Model
{
    use HasTranslations;

    public $translatable = [
        'form_h6',
        'form_text_h1',
        'form_p',
        'form_h1',
        'name',
        'phone',
        'date',
        'country',
        'description',
        'button',
    ];
}
