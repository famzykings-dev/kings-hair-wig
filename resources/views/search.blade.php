@extends('layouts.index')

@section('content')

<div class="container py-5">
    <br><br><br><br><br><br>
    <h3 class="mb-4">Search Results for "{{ $query }}"</h3>

    <div class="row g-4">

        @forelse($products as $product)

            <div class="col-lg-3 col-md-6">
                <div class="product-card">

                    <a href="{{ route('product.show', $product->id) }}">
                        <img src="{{ asset($product->images->first()->image ?? 'img/default.jpg') }}" class="img-fluid">
                    </a>

                    <h5 class="mt-2">
                        <a href="{{ route('product.show', $product->id) }}">
                            {{ $product->name }}
                        </a>
                    </h5>

                    <!-- <p>₦{{ number_format($product->price) }}</p> -->
                      <p class="price">
                            <span class="old-price">{{ '₦' . $product->old_price }}</span>
                            <span class="new-price">{{ '₦' . $product->price }}</span>
                        </p>

                </div>
            </div>

        @empty
            <p>No products found</p>
        @endforelse

    </div>
</div>

@endsection