@extends('layouts.dashboard')

@section('content')

<h2>Dashboard</h2>

<div class="row">
    <div class="col-md-4">
        <div class="card p-3">
            <h4>Total Users</h4>
            <h2>{{ $userCount }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-3">
            <h4>Total Products</h4>
            <h2>{{ $productCount }}</h2>
        </div>
    </div>
</div>

<h4 class="mt-4">Recent Products</h4>

@foreach($recentProducts as $product)
    <p>{{ $product->name }}</p>
@endforeach

@endsection