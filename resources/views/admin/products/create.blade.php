@extends('layouts.dashboard')

@section('content')

<h2>Add Product</h2>

<form action="/admin/products/store" method="POST" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="Name" class="form-control mb-2">

    <input type="text" name="price" placeholder="Price" class="form-control mb-2">
    
    <input type="text" name="old_price" placeholder="Old Price" class="form-control mb-2">

    <select name="category" class="form-control mb-2">
        @foreach($categories as $cat)
            <option value="{{ $cat }}">{{ $cat }}</option>
        @endforeach
    </select>

    <textarea name="description" class="form-control mb-2"></textarea>

    <input type="file" name="images[]" multiple class="form-control mb-2">

    <button class="btn btn-primary">Save</button>
</form>

@endsection