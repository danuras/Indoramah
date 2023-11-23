<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'whatsapp',
        'whatsapp_messsage',
        'call_number',
        'address',
        'email',
        'info_contact',
        'embeded_map_url',
        'info_location',
        'background_contact',
    ];
}
