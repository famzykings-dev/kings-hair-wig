@extends('layouts.checkouts')

@section('content')

@if(session('success'))
<div class="alert alert-success alert-dismissible fade show m-3" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
@endif

<div class="checkout-wrapper">
<div class="container">

<div class="row g-4">

    <!-- LEFT SIDE CHECKOUT -->
    <div class="col-md-8">

        <div class="checkout-card">

            <h2 class="checkout-title">Checkout</h2>

            <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- DELIVERY -->
                <div class="section-box">
                    <h4 class="section-title">Delivery Details</h4>

                    <input type="text" name="name" placeholder="Full Name"
                        class="form-control custom-input mb-3">

                    <input type="text" name="phone" placeholder="Phone Number"
                        class="form-control custom-input mb-3">

                    <textarea name="address" placeholder="Delivery Address"
                        class="form-control custom-input mb-3"></textarea>

                    <textarea name="note" placeholder="Order Note (optional)"
                        class="form-control custom-input"></textarea>
                </div>

                <!-- PAYMENT -->
                <div class="section-box mt-4">
                    <h4 class="section-title">Make Payment</h4>

                    <div class="payment-box">
                        <p><strong>Bank:</strong> {{ $payment->bank_name ?? 'Not set' }}</p>
                        <p><strong>Account Number:</strong> {{ $payment->account_number ?? 'Not set' }}</p>
                        <p><strong>Account Name:</strong> {{ $payment->account_name ?? 'Not set' }}</p>
                    </div>

                    <label class="mt-3">Upload Payment Proof</label>

                    <input type="file" name="payment_proof"
                        class="form-control custom-input mt-2">
                </div>

                <button class="checkout-btn mt-4 w-100">
                    Submit Order
                </button>

            </form>

        </div>

    </div>


    <!-- RIGHT SIDE STATUS -->
<div class="col-md-4">

@if($latestOrder && $latestOrder->status == 'pending')

    <div class="card shadow border-warning p-4 mt-3">
        <h5 class="mb-3">Payment Status</h5>

        <p class="text-warning fw-bold">
            ⏳ Payment sent successfully
        </p>

        <p>
            Your payment proof has been sent to admin dashboard.
            Please wait while admin confirms your payment.
        </p>
    </div>

@endif

</div>

@endsection