<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll()
    {
        $categories = Category::whereNull('deleted_at')
            ->select(['name', 'slug', 'parent_id'])
            ->withCount('products')
            ->get();


        return response()->json([
            'data' => $categories,
            'success' => true,
            'message' => 'Categories retrieved successfully',
        ], 200);
    }

}
