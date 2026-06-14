@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">
    <h2 class="mb-4">All Products</h2>

    <div class="row g-2">

        @foreach($products as $product)

        <!-- 8 cards in one row -->
        <div class="col">

            <div class="card p-2 h-100 small-card">

                <h6>{{ $product->name }}</h6>

                <p class="mb-1" style="font-size:12px;">
                    <span style="text-decoration: line-through; color:red;">
                        ₦{{ $product->old_price }}
                    </span><br>

                    <strong>₦{{ $product->price }}</strong>
                </p>

                <p style="font-size:12px;">{{ $product->category }}</p>

                <!-- Images -->
                <div class="mb-2">
                    @foreach($product->images as $img)
                        <img src="{{ asset($img->image) }}"
                             width="40"
                             height="40"
                             style="object-fit:cover;">
                    @endforeach
                </div>

                <!-- Buttons -->
                <a href="/admin/products/edit/{{ $product->id }}"
                   class="btn btn-warning btn-sm mb-1">
                   Edit
                </a>

                <a href="/admin/products/delete/{{ $product->id }}"
                   class="btn btn-danger btn-sm">
                   Delete
                </a>

            </div>

        </div>

        @endforeach

    </div>
</div>

@endsection