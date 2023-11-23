<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'content_type',
        'card_box_id',
        'rank',
    ];
}
