<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BobWigController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Bob Wigs')
            ->latest()
            ->get();

        return view('bobwig', compact('products'));
    }
}