<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_url',
        'text',
        'whatsapp_message',
        'sub_content_title',
        'card_id',
    ];

    public function content_types()
    {
        return $this->hasMany(ContentType::class, 'card_type_id');
    }
}
