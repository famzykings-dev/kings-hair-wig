
 @extends('layouts.carts')

    @section('content')

<section class="fullcard">
    
<div class="my-5 cart-container">

    <div class="text-center mb-4">
        <h2 class="cart-title">Your Cart</h2>
        <a href="{{ route('headbandwig') }}" class="continue-shopping">← Continue shopping</a>
    </div>

    <div class="cart-alert">
        🔥 Dont forget the beautiful wigs and hair producructs you added to cart! <br> 
        
        .......Complete the order to make sure it’s yours!
    </div>

    <table class="table cart-table mt-4">
        <thead>
            <tr>
                <th>PRODUCT</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
            </tr>
        </thead>

        <tbody>
          <tbody>

@if(session('cart'))
    @php $total = 0; @endphp

    @foreach(session('cart') as $id => $item)

        @php
            $itemTotal = $item['price'] * $item['quantity'];
            $total += $itemTotal;
        @endphp

        <tr>
            <td>
                <div class="product-info">
                    <img src="{{ asset($item['image']) }}" class="product-img">

                    <div>
                        <strong>{{ $item['name'] }}</strong><br>
                        <small>{{ $item['description'] }}</small><br>

                        <a href="{{ route('cart.remove', $id) }}" class="remove-btn text-danger">
                                 Remove
                        </a>
                    </div>
                </div>
            </td>

            <td>₦{{ number_format($item['price']) }}</td>

            <td>
                <input type="number"
                    value="{{ $item['quantity'] }}"
                    min="1"
                    class="qty-input"
                    data-id="{{ $id }}">
             </td>

            <td>₦{{ number_format($itemTotal) }}</td>
        </tr>

    @endforeach

@endif

</tbody>
        </tbody>
    </table>

    <div class="cart-summary mt-4">
        <!-- <p>
            <strong>Discount:</strong>
            <span class="discount">-₦3,000</span>
        </p> -->

        <h4 class="love">
            Subtotal: <span id="subtotal">
               ₦{{ number_format($total ?? 0) }}
               </span> NGN
        </h4>

        <div class="mt-3">
            <label>Add a note to your order</label>
            <textarea class="form-control note-box"></textarea>
        </div>
         <a href="{{ route('checkout') }}"><button class="checkout-btn mt-4">Proceed to Checkout</button></a>
    </div>

</div>
</section>

<script>
document.querySelectorAll('.qty-input').forEach(input => {
    input.addEventListener('change', function() {

        let id = this.getAttribute('data-id');
        let quantity = this.value;

        fetch("{{ route('cart.update') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({
                id: id,
                quantity: quantity
            })
        })
        .then(res => res.json())
        .then(data => {
            location.reload(); // refresh to update total
        });

    });
});
</script>
@endsection