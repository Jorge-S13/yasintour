<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TourPage extends Model
{
    use HasTranslations;
    public $translatable = [
        'navbar_text',
        'tour_h6',
        'tour_h1',
    ];
}
