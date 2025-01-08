<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;
    protected $fillable = [
        'base64_main_image',
        'main_text',
        'w_icon_1',
        'w_icon_2',
        'w_icon_3',
        'w_title_1',
        'w_title_2',
        'w_title_3',
        'w_description_1',
        'w_description_2',
        'w_description_3',
    ];
}
