<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HeadbandWigController extends Controller
{
  public function index()
    {
        $products = Product::with('images')->latest()->get();
        return view('headbandwig', compact('products'));
    }

     
}