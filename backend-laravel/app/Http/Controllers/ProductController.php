<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function show(Product $product)
    {
        return $product;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'sales_count' => 'nullable|integer',
            'discount' => 'nullable|numeric'
        ]);

        $product = Product::create($request->all());

        return response()->json($product, 201);
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'sales_count' => 'nullable|integer',
            'discount' => 'nullable|numeric'
        ]);

        $product->update($request->all());

        return response()->json($product, 200);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }

    public function topNewProducts()
    {
        return Product::orderBy('created_at', 'desc')->take(10)->get();
    }

    public function topSellingProducts()
    {
        return Product::orderBy('views', 'desc')->take(10)->get();
    }

    public function topDiscountedProducts()
    {
        return Product::orderBy('giakm', 'desc')->take(10)->get();
    }
}
