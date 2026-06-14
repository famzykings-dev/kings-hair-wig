
@extends('layouts.howtoorders')

@section('content')

<section class="order-hero">
    <div class="container text-center">
        <h1>HOW TO ORDER</h1>
        <p>Simple steps to order your luxury wig from Kings Hair</p>
    </div>
</section>

<section class="order-steps py-5">
    <div class="container">

        <div class="row g-4">

            <!-- Step 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="step-card text-center">
                    <div class="step-number">1</div>
                    <h4>Browse Products</h4>
                    <p>Go through our wig collections and choose the style you love.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="step-card text-center">
                    <div class="step-number">2</div>
                    <h4>View Product</h4>
                    <p>Click the VIEW button to see full details, images and price.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="step-card text-center">
                    <div class="step-number">3</div>
                    <h4>Add To Cart</h4>
                    <p>Choose quantity and add your selected wig to cart.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="step-card text-center">
                    <div class="step-number">4</div>
                    <h4>Proceed To Checkout</h4>
                    <p>Open your cart and continue to checkout page.</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="col-lg-4 col-md-6">
                <div class="step-card text-center">
                    <div class="step-number">5</div>
                    <h4>Fill Delivery Info</h4>
                    <p>Enter your name, phone number and delivery address.</p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="col-lg-4 col-md-6">
                <div class="step-card text-center">
                    <div class="step-number">6</div>
                    <h4>Receive Order</h4>
                    <p>Once payment is confirmed, your order will be shipped.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="order-help py-5">
    <div class="container text-center">
        <h2>Need Help?</h2>
        <p>Chat with us on WhatsApp for quick assistance.</p>

        <a href="https://wa.me/2348109529656?text=Hello Kings Hair, I need help placing an order."
           class="btn btn-success px-4 py-2">
            Chat on WhatsApp
        </a>
    </div>
</section>
@endsection

