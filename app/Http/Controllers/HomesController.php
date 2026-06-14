<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomesController extends Controller
{
    public function index()
    {
        $categories = [
            'Glueless Wigs',
            'Bob Wigs',
            'Bone Straight Wigs',
            'Raw Wavy Wig',
            'Original Curly Wig',
            'Fringe Wig',
            'Short Cut Wig',
            'Headband Wig',
            'Hair Bundles',
            'Wig Combo',
            'New Arrivals',
            'Hair Tools'
        ];

        $productsByCategory = [];

        foreach ($categories as $category) {
            $productsByCategory[$category] = Product::with('images')
                ->where('category', $category)
                ->latest()
                ->take(4)
                ->get();
        }

        return view('welcome', compact('productsByCategory'));
    }
}