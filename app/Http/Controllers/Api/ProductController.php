<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'message' => 'Products fetched successfully',
            'data' => ProductResource::collection($products),
        ], 200);
    }

    public function store(Request  $request)
    {
        ddd("aaaaaaaaaaaaaaaaaaaaaaa");
        try {
//            $validated = $request->validated();
            $validated['status'] = $validated['status'] ?? 1;
            $validated['slug'] = "aaaaaaaaaa";

dd($validated);
            $product = Product::create($validated);

            // Başarılı yanıt döndür
            return response()->json([
                'message' => 'Product created successfully',
                'data' => new ProductResource($product),
            ], 201);
        } catch (QueryException $e) {
            // Hata mesajını logla
            Log::error('Product creation failed: ' . $e->getMessage());

            // Hata yanıtını döndür
            return response()->json([
                'error' => 'Failed to create product',
                'message' => $e->getMessage(),
            ], 500);
        } catch (\Exception $e) {
            // Genel hataları yakala
            Log::error('Unexpected error: ' . $e->getMessage());

            return response()->json([
                'error' => 'Something went wrong',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json([
            'message' => 'Product fetched successfully',
            'data' => new ProductResource($product),
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $product->update($validated);
        return response()->json([
            'message' => 'Product updated successfully',
            'data' => new ProductResource($product),
        ], 200);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json([
            'message' => 'Product deleted successfully',
        ], 200);
    }

}
