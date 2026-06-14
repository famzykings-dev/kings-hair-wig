<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HairToolsController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Hair Tools')
            ->latest()
            ->get();

        return view('hairtools', compact('products'));
    }
}