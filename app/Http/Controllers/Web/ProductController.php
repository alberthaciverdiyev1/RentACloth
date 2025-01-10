<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index()
    {
        $response = Http::get(route('api.products.index'));
        $products = $response->json();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
//        $response = Http::post(route('/api/products-store'), $request->all());
//        $response = Request::create('/api/colors', 'GET');
        $apiRequest = Request::create('/api/products-add', 'POST', $request->all());

        // Rota işlemi
        $response = app()->handle($apiRequest);


//        if ($response->successful()) {
//            return redirect()->route('products.index')->with('success', 'Product added successfully!');
//        }

        return back()->withErrors('Failed to add product.');
    }

    public function show($id)
    {
        $response = Http::get(route('api.products.show', ['product' => $id]));
        $product = $response->json();

        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $response = Http::get(route('api.products.show', ['product' => $id]));
        $product = $response->json();

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $response = Http::put(route('api.products.update', ['product' => $id]), $request->all());

        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Product updated successfully!');
        }

        return back()->withErrors('Failed to update product.');
    }

    public function destroy($id)
    {
        $response = Http::delete(route('api.products.destroy', ['product' => $id]));

        if ($response->successful()) {
            return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
        }

        return back()->withErrors('Failed to delete product.');
    }
}
