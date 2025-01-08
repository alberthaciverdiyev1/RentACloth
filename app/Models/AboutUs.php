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
    protected static function booted()
    {
        static::saved(function ($record) {
//            dump($record->image);
            if ($record->image) {
                $imagePath = $record->image;
                $imageContent = file_get_contents(storage_path('app/public/storage/' . $imagePath));
                $base64Image = base64_encode($imageContent);

                $record->update([
                    'base64_main_image' => 'data:image/' . pathinfo($imagePath, PATHINFO_EXTENSION) . ';base64,' . $base64Image
                ]);
            }
        });
    }
}
