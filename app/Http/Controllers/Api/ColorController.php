<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function getAll()
    {
        $colors = Color::whereNull('deleted_at')
            ->where('is_active', '=', 1)
            ->select('id', 'name', 'is_active','color_code')
            ->get();

        return response()->json([
            'data' => $colors,
            'success' => true,
            'message' => 'Colors retrieved successfully',
        ], 200);
    }
}
