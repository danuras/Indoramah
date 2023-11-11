<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailService extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email_sender',
        'password',
        'email_receiver',
    ];
}
