<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'header_text_color',
        'common_text_color',
        'background_color_1',
        'background_color_2',
        'card_color',
        'highlight_color',
    ];
    use HasFactory;
}
