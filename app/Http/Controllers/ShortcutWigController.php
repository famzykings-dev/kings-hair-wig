<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShortcutWigController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Short Cut Wig')
            ->latest()
            ->get();

        return view('shortcutwig', compact('products'));
    }
}