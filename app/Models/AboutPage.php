<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutPage extends Model
{
    use HasTranslations;

    public $translatable = [
        'navbar_text',
        'about_h6',
        'about_h1',
        'about_span',
        'about_main_p1',
        'about_main_p2',
        'about_p1',
        'about_p2',
        'about_p3',
        'about_p4',
        'about_p5',
        'about_p6',
        'button',
        'team_h6',
        'team_h1',
    ];
}
