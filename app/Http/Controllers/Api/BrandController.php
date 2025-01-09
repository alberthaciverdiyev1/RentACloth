<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function getAll(){
        $brands = Brand::wherenull('deleted_at')->select(['id','name','slug'])->get();
        return response()->json([
            'data' => $brands,
            'success' => true,
            'message' => 'Brands retrieved successfully',
        ], 200);
    }
}
