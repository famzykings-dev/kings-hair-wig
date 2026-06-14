@extends('layouts.viewproduct')

@section('content')

 <section class="py-5">
<div class="container product-section">

    <div class="row align-items-center product-box">

        <!-- IMAGE -->
        <div class="col-md-6 text-center">
             <img src="{{ asset($product->images->first()->image ?? 'img/default.jpg') }}"
                 class="img-fluid rounded shadow">
        </div>

        <!-- DETAILS -->
        <div class="col-md-6">
            <h2 id="productName">{{ $product->name }}</h2>
            <p>{{ $product->category }}</p> 
            <h4 id="productPrice">₦{{ $product->price }}</h4>
            <h4 class="old-price" style="text-decoration: line-through;">₦{{ $product->old_price }}</h4>

            <p class="product-desc">
                {{ $product->description }}
            </p>

            <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-dark w-100 mb-2">
              Add to Cart
             </a>

           <a href="{{ route('buy.now', $product->id) }}" class="btn btn-success w-100 mb-2">
               Buy Now
           </a>

            <!-- <button class="btn btn-success w-100" onclick="buyNow()">
                Buy Now
            </button> -->
        </div>

    </div>

</div>
</section>

@endsection