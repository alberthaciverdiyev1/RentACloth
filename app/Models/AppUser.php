<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    use HasFactory;

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
