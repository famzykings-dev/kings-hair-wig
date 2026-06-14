@extends('layouts.buynow')

@section('content')
 <br><br><br><br><br> <br><br><br>
<div class="buy-now-container">
    <div class="buy-now-card">
        <!-- LEFT: PRODUCT -->
         
        <div class="product-section">

            <h2 class="title">Buy Now</h2>

            <div class="product-box">

                <img src="{{ asset($product->images->first()->image) }}" class="product-img">

                <div class="product-info">
                    <h3>{{ $product->name }}</h3>

                    <p class="desc">{{ $product->description }}</p>

                    <h4 class="price">₦{{ number_format($product->price) }}</h4>
                </div>

            </div>

        </div>

        <!-- RIGHT: FORM -->
        <form method="POST" action="{{ route('buy.now.process') }}" enctype="multipart/form-data" class="form-section">
            @csrf

            <input type="hidden" name="product_id" value="{{ $product->id }}">

            <label>Quantity</label>
            <input type="number" name="quantity" value="1" min="1" class="input">

            <label>Full Name</label>
            <input type="text" name="name" placeholder="Enter your name" class="input">

            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="Enter phone number" class="input">

            <label>Delivery Address</label>
            <textarea name="address" placeholder="Enter delivery address" class="input textarea"></textarea>

            <label>Payment Proof (optional)</label>
            <input type="file" name="payment_proof" class="input">

          <a href="{{ route('checkout', $product->id) }}" class="btn btn-success w-100 mb-2">
 Buy Now
</a>

        </form>

    </div>

</div>

@endsection