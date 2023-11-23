<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebAttribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'icon',
        'short_description',
        'lpng_title',
        'main_heading',
        'sub_heading',
        'background_image',
        'background_testimonies',
        'language',
    ];
}
