<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    protected $fillable = [
        'image_url',
        'title',
        'content_type',
        'is_clickable',
        'text',
        'link',
        'card_box_id',
    ];
}
