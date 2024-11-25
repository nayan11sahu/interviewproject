<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Fetch all products with pagination
    public function index(Request $request)
    {
        $products = Product::paginate(10);  // 10 products per page
        return response()->json($products);
    }

    // Fetch individual product details
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }

    // Search products by name or description
    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%$query%")
                           ->orWhere('description', 'like', "%$query%")
                           ->paginate(10);
        return response()->json($products);
    }
}

