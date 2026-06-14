<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class GluelessWigController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Glueless Wigs')
            ->latest()
            ->get();

        return view('gluelesswig', compact('products'));
    }
}