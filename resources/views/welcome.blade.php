    
    @extends('layouts.index')

    @section('content')
    
    <!-- Carousel -->
    <!-- Carousel -->
    <div id="wigCarousel" class="carousel slide" data-bs-ride="carousel" data-aos="zoom-in">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active had">
                <img src="../assets/img/4754b19d-6c56-4965-b8f2-2f93b20f1e9b.png" class="d-block w-100" alt="Slide 1">
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="../assets/img/Elegant beauty with flawless hair bundles.png" class="d-block w-100" alt="Slide 2">
            </div>

        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#wigCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#wigCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    @if(session('success'))
    <div id="successMessage" class="alert alert-success text-center">
        {{ session('success') }}
    </div>
    @endif


    <section class="top-sellers py-5">
        <div class="container">

            <!-- Section Title -->
            <div class="text-center mb-5 pink">
                <h3 class="fw-bold">LUXURY HUMAN HAIR WIG</h3>
            </div>

            <!-- Row -->
            <a href="{{ route('gluelesswig') }}">

                <div class="row align-items-center leader">

                    <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0" data-aos="zoom-in">
                        <img src="../assets/img/Confident look with glueless wigs.png" class="img-fluid rounded">
                    </div>

                    <div class="col-lg-6 col-md-12" data-aos="zoom-in">
                        <p class="am">
                            we sell wigs suitable for all occasions <br>
                            <b class="highlight-text">GLUELESS WIGS FOR YOUR OCCASIONS.</b>
                        </p>

                        <button class="btn btn-dark mt-3 px-4 py-2">
                            Shop Now
                        </button>
                    </div>

                </div>
            </a>

            <br><br>

            <!-- Product Cards -->

            <div class="container">
            <div class="row g-4 justify-content-center broke">

                @foreach($productsByCategory['Glueless Wigs'] ?? [] as $product)
                <div class="col-lg-3 col-md-6 col-sm-12"data-aos="zoom-in">
                    <div class="product-card">
                        @if($product->images->count())
                            <img src="{{ asset($product->images[0]->image) }}" alt="">
                        @endif
                    </div>

                    <div class="card-info text-center">
                        <h5>{{ $product->name }}</h5>
                        

                        <p class="price">
                            <span class="old-price">₦{{ $product->old_price }}</span>
                            <span class="new-price">₦{{ $product->price }}</span>
                        </p>

                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-dark w-100">
                                  VIEW
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        </div>
    </section>


    <section class="top-sellers py-5">
        <div class="container">

            <!-- Section Title -->

            <!-- Row -->
            <a href="{{ route('bonestraight') }}">

                <div class="row align-items-center leader">

                    <!-- Image -->

                    <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0" data-aos="zoom-in">
                        <img src="../assets/img/Elegance in straight, sleek hair (1).png" class="img-fluid rounded"
                            alt="Hair Wig">

                    </div>

                    <!-- Text Content -->

                    <div class="col-lg-6 col-md-12" data-aos="zoom-in">

                        <p class="am">
                            <!-- Lorem ipsum dolor, sit amet consectetur <br> -->
                            <b class="highlight-text">BONE STRAIGHT <br> TO MATCH YOUR OUTFITS.
                        </p>

                        <button class="btn btn-dark mt-3 px-4 py-2">
                            Shop Now
                        </button>

                    </div>
                </div>
            </a>

            <br><br>
            <!-- Product Cards -->

           <div class="container">
            <div class="row g-4 justify-content-center">

                @foreach($productsByCategory['Bone Straight Wigs'] ?? [] as $product)
                <div class="col-lg-3 col-md-6 col-sm-12"data-aos="zoom-in">
                    <div class="product-card">
                        @if($product->images->count())
                            <img src="{{ asset($product->images[0]->image) }}" alt="">
                        @endif
                    </div>

                    <div class="card-info text-center broke">
                        <h5>{{ $product->name }}</h5>
                    

                         <p class="price">
                            <span class="old-price">₦{{ $product->old_price }}</span>
                            <span class="new-price">₦{{ $product->price }}</span>
                        </p>

                         <a href="{{ route('product.show', $product->id) }}" class="btn btn-dark w-100">
                                  VIEW
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
    </section>

    <section class="top-sellers py-5">
        <div class="container">

            <!-- Section Title -->

            <!-- Row -->
            <a href="{{ route('bobwig') }}">
                <div class="row align-items-center leader">

                    <!-- Image -->

                    <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0" data-aos="zoom-in">
                        <img src="../assets/img/Elegant bob wig collection showcase.png" class="img-fluid rounded" alt="Hair Wig">

                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 col-md-12" data-aos="zoom-in">

                        <p class="am">
                          <br>
                            <b class="highlight-text">CLASSIC WIGS YOU WOULD LOVE.</b> <br>
                            
                        </p>

                        <button class="btn btn-dark mt-3 px-4 py-2">
                            Shop Now
                        </button>

                    </div>
                </div>
            </a>
            <br><br>
            <!-- Product Cards -->

           <div class="container">
            <div class="row g-4 justify-content-center broke">

                @foreach($productsByCategory['Bob Wigs'] ?? [] as $product)
                <div class="col-lg-3 col-md-6 col-sm-12"data-aos="zoom-in">
                    <div class="product-card">
                        @if($product->images->count())
                            <img src="{{ asset($product->images[0]->image) }}" alt="">
                        @endif
                    </div>

                    <div class="card-info text-center">
                        <h5>{{ $product->name }}</h5>
                        

                        <p class="price">
                            <span class="old-price">₦{{ $product->old_price }}</span>
                            <span class="new-price">₦{{ $product->price }}</span>
                        </p>

                          <a href="{{ route('product.show', $product->id) }}" class="btn btn-dark w-100">
                                  VIEW
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
    </section>

    <section class="top-sellers py-5">

        <div class="container">

            <!-- Section Title -->

            <!-- Row -->
            <a href="{{ route('curlywig') }}">
                <div class="row align-items-center leader">

                    <!-- Image -->
                    <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0" data-aos="zoom-in">
                        <img src="../assets/img/Curly wig style showcase with model.png" class="img-fluid rounded" alt="Hair Wig">

                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 col-md-12" data-aos="zoom-in">

                        <p class="am">
                            <b class="highlight-text">NICE AND LOVELY LUXURY CURLY WIGS.
                        </p>



                        <button class="btn btn-dark mt-3 px-4 py-2">
                            Shop Now
                        </button>


                    </div>

                </div>

            </a>

            <br><br>
            <!-- Product Cards -->

            <div class="container">
            <div class="row g-4 justify-content-center broke">

                @foreach($productsByCategory['Original Curly Wig'] ?? [] as $product)
                <div class="col-lg-3 col-md-6 col-sm-12"data-aos="zoom-in">
                    <div class="product-card">
                        @if($product->images->count())
                            <img src="{{ asset($product->images[0]->image) }}" alt="">
                        @endif
                    </div>

                    <div class="card-info text-center">
                        <h5>{{ $product->name }}</h5>
                        

                         <p class="price">
                            <span class="old-price">₦{{ $product->old_price }}</span>
                            <span class="new-price">₦{{ $product->price }}</span>
                        </p>

                          <a href="{{ route('product.show', $product->id) }}" class="btn btn-dark w-100">
                                  VIEW
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>
    </section>

    <section class="top-sellers py-5">
        <div class="container">

            <!-- Section Title -->

            <!-- Row -->
            <a href="{{ route('shortcutwig') }}">

                <div class="row align-items-center leader">

                    <!-- Image -->

                    <div class="col-lg-6 col-md-12 text-center mb-4 mb-lg-0" data-aos="zoom-in">
                        <img src="../assets/img/Confident model with pixie cut wigs.png" class="img-fluid rounded" alt="Hair Wig">

                    </div>

                    <!-- Text Content -->
                    <div class="col-lg-6 col-md-12" data-aos="zoom-in">

                        <p class="am">                         
                            <b class="highlight-text">BEAUTIFUL AND CLASSY SHORTCUT WIGS.       
                        </p>

                        <button class="btn btn-dark mt-3 px-4 py-2">
                            Shop Now
                        </button>

                    </div>
                </div>
            </a>

            <br><br>
            <!-- Product Cards -->

          <div class="container">
            <div class="row g-4 justify-content-center">

                @foreach($productsByCategory['Short Cut Wig'] ?? [] as $product)
                <div class="col-lg-3 col-md-6 col-sm-12"data-aos="zoom-in">
                    <div class="product-card">
                        @if($product->images->count())
                            <img src="{{ asset($product->images[0]->image) }}" alt="">
                        @endif
                    </div>

                    <div class="card-info text-center broke">
                        <h5>{{ $product->name }}</h5>
                        

                         <p class="price">
                            <span class="old-price">₦{{ $product->old_price }}</span>
                            <span class="new-price">₦{{ $product->price }}</span>
                        </p>

                      <a href="{{ route('product.show', $product->id) }}" class="btn btn-dark w-100">
                                  VIEW
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>

    </div>

    </section>



    <section class="wig-showcase py-5">

        <div class="container">

            <a href="{{ route('hairtools') }}" class="section-link">
                <div class="row love">

                    <!-- LEFT -->

                    <div class="col-lg-4 col-md-12" data-aos="zoom-in">

                        <div class="card wig-card mb-3 shadow-sm">
                            <img src="../assets/img/Essential hairstyling tools kit.png" class="card-img-top" alt="">
                        </div>



                        <div class="card wig-card mb-3 shadow-sm">
                            <img src="../assets/img/A stylish collection of hair tools.png" class="card-img-top" alt="">
                        </div>



                        <div class="card wig-card shadow-sm">
                            <img src="../assets/img/Hydra Repair hair mask jar.png" class="card-img-top" alt="">
                        </div>


                    </div>

                    <!-- CENTER -->
                    <div class="col-lg-4 col-md-12 d-flex flex-column justify-content-center text-center my-4 my-lg-0"
                        data-aos="zoom-in">

                        <h1 class="fw-bold mb-3 clean">Original Tools For Your Luxury Wigs. </h1>

                        <p class="mb-3">
                            <!-- We sell wigs suitable for all occasions <br>
                    <b class="highlight-text">GLUELESS WIGS FOR YOUR OCCASIONS.</b><br>
                    Premium quality for your perfect look. -->
                        </p>



                        <button class="btn btn-dark px-4 py-2 mt-2">
                            Shop Now
                        </button>


                    </div>

                    <!-- RIGHT -->
                    <div class="col-lg-4 col-md-12" data-aos="zoom-in">

                        <div class="card wig-card mb-3 shadow-sm">
                            <img src="../assets/img/Shampoo bottle designs with unique ingredients.png" class="card-img-top"
                                alt="">
                        </div>



                        <div class="card wig-card mb-3 shadow-sm">
                            <img src="../assets/img/Hot combing long brown hair.png" class="card-img-top" alt="">
                        </div>



                        <div class="card wig-card shadow-sm">
                            <img src="../assets/img/Elegant pixie cut wig showcase.png" class="card-img-top" alt="">
                        </div>


                    </div>

                </div>
            </a>
        </div>

    </section>
    @endsection