<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WigComboController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Wig Combo')
            ->latest()
            ->get();

        return view('wigcombo', compact('products'));
    }
}