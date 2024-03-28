<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Destination extends Model
{
    use HasTranslations;
    public $translatable = [
        'name',
        'info',
    ];
}
