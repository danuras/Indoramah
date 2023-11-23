<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $fillable = [
        'facebook',
        'twitter',
        'linkedin',
        'instagram',
        'google_plus',
        'youtube',
    ];
    use HasFactory;
}
