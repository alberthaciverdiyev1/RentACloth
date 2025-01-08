<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AppUser extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'email',
        'base64image',
        'age',
        'gender',
        'password',
        'email_confirmed',
        'failed_login_attempt',
        'is_active',
        'is_blocked'
    ];

}
