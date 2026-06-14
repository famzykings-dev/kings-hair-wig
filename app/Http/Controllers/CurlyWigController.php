<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CurlyWigController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Original Curly Wig')
            ->latest()
            ->get();

        return view('curlywig', compact('products'));
    }
}