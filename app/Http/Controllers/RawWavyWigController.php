<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class RawWavyWigController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Raw Wavy Wig')
            ->latest()
            ->get();

        return view('rawwavywig', compact('products'));
    }
}