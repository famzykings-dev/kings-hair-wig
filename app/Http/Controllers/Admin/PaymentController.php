<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentDetail;

class PaymentController extends Controller
{
    // SHOW FORM
    public function index()
    {
        $payment = PaymentDetail::first();
        return view('admin.payment', compact('payment'));
    }

    // SAVE OR UPDATE
    public function save(Request $request)
    {
        $request->validate([
            'bank_name' => 'required',
            'account_number' => 'required',
            'account_name' => 'required',
        ]);

        PaymentDetail::updateOrCreate(
            ['id' => 1],
            [
                'bank_name' => $request->bank_name,
                'account_number' => $request->account_number,
                'account_name' => $request->account_name,
            ]
        );

        return back()->with('success', 'Payment details updated successfully!');
    }
}