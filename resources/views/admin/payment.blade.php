@extends('layouts.dashboard')

@section('content')

<div class="container mt-4">

    <h3>Payment Settings</h3>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.payment.save') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Bank Name</label>
            <input type="text" name="bank_name" class="form-control"
                value="{{ $payment->bank_name ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Account Number</label>
            <input type="text" name="account_number" class="form-control"
                value="{{ $payment->account_number ?? '' }}">
        </div>

        <div class="mb-3">
            <label>Account Name</label>
            <input type="text" name="account_name" class="form-control"
                value="{{ $payment->account_name ?? '' }}">
        </div>

        <button class="btn btn-dark">Save Details</button>
    </form>

</div>

@endsection