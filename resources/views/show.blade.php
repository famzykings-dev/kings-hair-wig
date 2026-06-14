<!-- @extends('layouts.index')

@section('content')

<div class="container py-5">

    <div class="row">

        <div class="col-md-6">
            <img src="{{ asset($product->images->first()->image ?? 'img/default.jpg') }}" class="img-fluid">
        </div>

        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>

            <h4>₦{{ number_format($product->price) }}</h4>

            <p>{{ $product->description }}</p>

            <button class="btn btn-dark">Add to Cart</button>
        </div>

    </div>

</div>

@endsection -->