
    @extends('layouts.shortcutwigs')

    @section('content')

    <!-- start of bonstraight -->

<section class="top-sellers py-5">
    <div class="container">

        <br><br><br>

        <div class="text-center mb-5">
            <br><br><br>
            <h3 class="fw-bold pink">SHORTCUT WIGS</h3>
        </div>

        <div class="row g-4 justify-content-center">

            @foreach($products as $product)

                <div class="col-lg-3 col-md-6 col-sm-12" data-aos="zoom-in">

                    <div class="product-card">

                        {{-- show first image --}}
                        <img src="{{ asset($product->images->first()->image ?? 'img/default.jpg') }}">

                    </div>

                    <div class="card-info text-center">

                        <h5>{{ $product->name }}</h5>

                      <p class="price">
                            <span class="old-price">{{ '₦' . $product->old_price }}</span>
                            <span class="new-price">{{ '₦' . $product->price }}</span>
                        </p>

                   <a href="{{ route('product.show', $product->id) }}" class="btn btn-dark w-100">
                                  VIEW
                        </a>

                    </div>
                </div>

            @endforeach

        </div>

    </div>
</section>
    @endsection

