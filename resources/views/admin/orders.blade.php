@extends('layouts.dashboard')

@section('content')

<div class="orders-wrapper">

    <h3 class="mb-4 text-white">📦 All Orders</h3>

    @foreach($orders as $order)

        <div class="order-card">

            <!-- ORDER HEADER -->
            <div class="order-header">
                <h5>{{ $order->name }}</h5>

                <span class="status {{ $order->status }}">
                    {{ ucfirst($order->status) }}
                </span>
            </div>

            <!-- CUSTOMER INFO -->
            <div class="order-body">
                <p><strong>Phone:</strong> {{ $order->phone }}</p>
                <p><strong>Address:</strong> {{ $order->address }}</p>
                <p><strong>Note:</strong> {{ $order->note }}</p>
            </div>

            <!-- PAYMENT PROOF -->
            <div class="payment-proof">
                <p><strong>Payment Proof:</strong></p>

                <!-- <img src="{{ Storage::url($order->payment_proof) }}" width="150"> -->
                <a href="{{ Storage::url($order->payment_proof) }}"
                class="glightbox"
                data-gallery="payment-{{ $order->id }}"
                data-title="Payment Proof">

                <img src="{{ Storage::url($order->payment_proof) }}"
                        width="150"
                        class="rounded shadow">
                </a>
            </div>


            <!-- ✅ ORDER PRODUCTS GO HERE -->
            <div class="mt-4">

                <h5>🛒 Ordered Products</h5>

                @foreach($order->items as $item)

                    <div class="border rounded p-3 mb-3 bg-light text-dark">

                        <!-- <img src="{{ asset($item->product_image) }}" width="100" class="mb-2"> -->
                         <a href="{{ asset($item->product_image) }}"
                            class="glightbox"
                            data-gallery="order-{{ $order->id }}"
                            data-title="{{ $item->product_name }}">

                         <img src="{{ asset($item->product_image) }}"
                               width="100"
                               class="rounded shadow">
                         </a>

                        <p><strong>Name:</strong> {{ $item->product_name }}</p>

                        <p><strong>Description:</strong> {{ $item->product_description }}</p>

                        <p><strong>Price:</strong> ₦{{ number_format($item->price) }}</p>

                        <p><strong>Quantity:</strong> {{ $item->quantity }}</p>

                        <p><strong>Total:</strong> ₦{{ number_format($item->subtotal) }}</p>

                    </div>

                @endforeach

            </div>
            


            <!-- APPROVE BUTTON -->
            <div class="order-actions">

                @if($order->status == 'pending')

                    <a href="{{ route('admin.approve', $order->id) }}" class="btn btn-success">
                        Approve Order
                    </a>

                @else

                    <button class="btn btn-secondary" disabled>
                        Approved
                    </button>

                @endif

            </div>

        </div>

    @endforeach

</div>

@endsection