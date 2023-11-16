<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    use HasFactory;

    public function content_types()
    {
        return $this->hasMany(ContentType::class, 'card_type_id');
    }
}
