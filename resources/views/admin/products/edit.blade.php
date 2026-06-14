@extends('layouts.dashboard')

@section('content')

<h2>Edit Product</h2>

<form action="/admin/products/update/{{ $product->id }}" method="POST">
    @csrf

    <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-2">

    <input type="text" name="price" value="{{ $product->price }}" class="form-control mb-2">

    <input type="text" name="old_price" value="{{ $product->old_price }}" class="form-control mb-2">

    <textarea name="description" class="form-control mb-2">{{ $product->description }}</textarea>

    <select name="category" class="form-control mb-2">
        @foreach($categories as $cat)
            <option value="{{ $cat }}" {{ $product->category == $cat ? 'selected' : '' }}>
                {{ $cat }}
            </option>
        @endforeach
    </select>

    <button class="btn btn-success">Update</button>

</form>

@endsection