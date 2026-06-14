<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class BoneStraightController extends Controller
{
    public function index()
    {
        $products = Product::with('images')
            ->where('category', 'Bone Straight Wigs')
            ->latest()
            ->get();

        return view('bonestraight', compact('products'));
    }
}