<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);

        return view('product.show', compact('product'));
    }

    public function search(Request $request)
    {
        $query = $request->search;

        $products = Product::where('name', 'LIKE', "%$query%")->get();

        // If only one product → redirect directly
        if ($products->count() == 1) {
            return redirect()->route('product.show', $products->first()->id);
        }

        // Otherwise show results page
        return view('search', compact('products', 'query'));
    }
}