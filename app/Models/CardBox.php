<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardBox extends Model
{
    use HasFactory;
    protected $fillable = [
        'card_type',
        'title',
        'info',
    ];

    public function cards()
    {
        return $this->hasMany(Card::class, 'card_box_id');
    }
}
