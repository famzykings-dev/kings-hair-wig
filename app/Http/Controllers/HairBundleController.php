<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HairBundleController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Hair Bundles')
            ->latest()
            ->get();

        return view('hairbundle', compact('products'));
    }
}