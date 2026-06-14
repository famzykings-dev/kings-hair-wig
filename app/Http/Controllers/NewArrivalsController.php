<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class NewArrivalsController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'New Arrivals')
            ->latest()
            ->get();

        return view('newarrivals', compact('products'));
    }
}