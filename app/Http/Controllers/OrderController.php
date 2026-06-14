<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PaymentDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class OrderController extends Controller
{
    public function checkout()
{
    $cart = session()->get('cart', []);
    $payment = PaymentDetail::first();

    $orderId = session('current_order_id');

    $latestOrder = null;

if ($orderId) {
    $latestOrder = Order::find($orderId);
}

    return view('checkout', compact('cart', 'payment', 'latestOrder'));
}

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'payment_proof' => 'required|image'
        ]);

        // Upload payment proof
        $image = $request->file('payment_proof')->store('payments', 'public');

        // Save main order
        $order = Order::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address,
            'note' => $request->note,
            'cart_data' => json_encode([]),
            'payment_proof' => $image,
            'status' => 'pending',
            'payment_status' => 'pending'
        ]);


           session(['current_order_id' => $order->id]);

        /*
        =====================================
        CHECK IF BUY NOW PRODUCT EXISTS
        =====================================
        */

        if (session()->has('buy_now')) {

            $products = session('buy_now');

            foreach ($products as $id => $item) {

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $id,
                    'product_name' => $item['name'],
                    'product_description' => $item['description'],
                    'product_image' => $item['image'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'subtotal' => $item['price'] * $item['quantity'],
                ]);
            }

            // Clear buy now session
            session()->forget('buy_now');
        }

        /*
        =====================================
        ELSE NORMAL CART ORDER
        =====================================
        */
        else {

            $cart = session('cart', []);

            foreach ($cart as $id => $item) {

                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $id,
                    'product_name' => $item['name'],
                    'product_description' => $item['description'] ?? '',
                    'product_image' => $item['image'],
                    'price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'subtotal' => $item['price'] * $item['quantity'],
                ]);
            }

            // Clear cart
            session()->forget('cart');
        }

        return redirect()
    ->route('checkout')
    ->with('success', 'Payment proof uploaded successfully. Awaiting admin approval.')
    ->with('order_id', $order->id);
    }

    public function index()
    {
        $orders = Order::with('items')->latest()->get();

        return view('admin.orders', compact('orders'));
    }

    public function approve($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'approved';
        $order->save();

        return back()->with('success', 'Order Approved!');
    }

    public function buyNow($id)
    {
        $product = Product::findOrFail($id);

        session()->put('buy_now', [
            $product->id => [
                'name' => $product->name,
                'description' => $product->description,
                'image' => $product->images->first()->image ?? '',
                'price' => $product->price,
                'quantity' => 1,
            ]
        ]);

        return redirect()->route('checkout');
    }
}