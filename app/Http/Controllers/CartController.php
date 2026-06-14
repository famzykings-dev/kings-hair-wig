<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    // ADD TO CART
    public function add($id)
    {
        $product = Product::with('images')->findOrFail($id);

        $cart = session()->get('cart', []);

        // if product already in cart
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "price" => $product->price,
                "old_price" => $product->old_price,
                "description" => $product->description,
                "image" => $product->images->first()->image ?? 'img/default.jpg',
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart')->with('success', 'Product added to cart');
    }

    // VIEW CART
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function update(Request $request)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$request->id])) {
        $cart[$request->id]['quantity'] = $request->quantity;
    }

    session()->put('cart', $cart);

    return response()->json([
        'success' => true
    ]);
}

public function remove($id)
{
    $cart = session()->get('cart', []);

    if(isset($cart[$id])) {
        unset($cart[$id]);
    }

    session()->put('cart', $cart);

    return redirect()->route('cart')->with('success', 'Product removed');
}
}