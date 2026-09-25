<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manual extends Model
{
    protected $fillable = [
        'slug',
        'title_pt',
        'title_en',
        'description_pt',
        'description_en',
        'cover',
        'available',
    ];

    protected $casts = [
        'available' => 'boolean',
    ];
}
