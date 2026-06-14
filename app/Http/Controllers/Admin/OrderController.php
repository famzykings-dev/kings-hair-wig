<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Order as OrderModel;

class OrderController extends Controller
{
    public function index()
    {
        $orders = OrderModel::with('items')->latest()->get();
        return view('admin.orders', compact('orders'));
    }

    public function approve($id)
    {
        $order = OrderModel::findOrFail($id);
        $order->status = 'approved';
        $order->save();

        return back()->with('success', 'Order Approved!');
    }
}