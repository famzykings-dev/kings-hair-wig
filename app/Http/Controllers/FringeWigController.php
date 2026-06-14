<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FringeWigController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Fringe Wig')
            ->latest()
            ->get();

        return view('fringewig', compact('products'));
    }
}