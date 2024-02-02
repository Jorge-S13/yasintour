<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MainPage extends Model
{
    use HasTranslations;
    protected $table = 'main_pages';
    public $translatable = [
        'navbar_text',
        'process_h6',
        'process_h1',
        'process_item1_h5',
        'process_item1_p',
        'process_item2_h5',
        'process_item2_p',
        'process_item3_h5',
        'process_item3_p',
        'feedback_h6',
        'feedback_h1',
    ];
}
