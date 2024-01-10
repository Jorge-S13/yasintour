<?php

namespace App\Models;

use App\Enums\ContactStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
      'status' => ContactStatusEnum::class
    ];
}
