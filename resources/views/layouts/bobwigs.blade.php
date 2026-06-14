<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kings Hair')</title>
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/png" href="{{ asset('assets/img/Kings Hair salon logo design.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bobwig.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light  shadow-sm flex-column">

        <!-- 🔥 TOP ROW -->
        <div class="container d-flex align-items-center justify-content-between py-3">

            <!-- Empty div (left space for perfect centering) -->
            <div style="width: 120px;"></div>

            <!-- Brand (centered) -->
            <!-- <a class="navbar-brand fw-bold fs-3 m-0 text-center" href="index.html">KINGS HAIR</a> -->
            <a class="navbar-brand d-flex align-items-center justify-content-center gap-2 m-0" href="{{ route('welcome') }}">
                <img src="../assets/img/Kings Hair salon logo design.png" alt="Logo" class="logo-img">
                <!-- <span>KINGS HAIR</span> -->
            </a>

            <!-- Icons (right side) -->
            <div class="d-flex align-items-center gap-3" style="width: 120px; justify-content: flex-end;">


                <div class="search-wrapper">
                    
                    <!-- SEARCH ICON -->
                    <a href="#" id="searchToggle" class="text-dark">
                        <i class="bi bi-search fs-3"></i>
                    </a>

                    <!-- SEARCH FORM -->
                    <form action="{{ route('search') }}" method="GET" class="search-form" id="searchForm">
                        <input type="text" name="search" placeholder="Search wigs...">
                        <button type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>

                </div>

                <!-- register/login icon -->
              <a href="{{ route('register') }}" class="text-dark">
               <i class="ri-user-fill fs-3"></i>
             </a>

              
                </form>
                <!-- cart icon -->
                <a href="{{ route('cart') }}" class="text-dark position-relative">
                    <i class="bi bi-cart fs-3"></i>
                   <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                     {{ count(session('cart', [])) }}
                    </span>
                </a>
                </a>
                <!-- Dark Mode Toggle -->
                <div class="theme-toggle">
                    <input type="checkbox" id="darkModeToggle" onchange="toggleDarkMode()">
                    <label for="darkModeToggle" class="toggle-label">
                        <i class="fas fa-sun icon sun"></i>
                        <i class="fas fa-moon icon moon"></i>
                        <span class="ball"></span>
                    </label>
                </div>
                </main>

            </div>
        </div>
        </div>

        <!-- Divider -->
        <!-- <hr class="w-100 m-0"> -->

        <!-- 🔥 TOGGLER -->
        <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- 🔥 MENU -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                  <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">HOME</a></li>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        ALL WIGS
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('gluelesswig') }}">Glueless Wigs</a></li>
                        <li><a class="dropdown-item" href="{{ route('bobwig') }}">Bob Wigs</a></li>
                        <li><a class="dropdown-item" href="{{ route('bonestraight') }}">Bone Straight Wigs</a></li>
                        <li><a class="dropdown-item" href="{{ route('rawwavywig') }}">Raw Wavy Wig</a></li>
                        <li><a class="dropdown-item" href="{{ route('curlywig') }}">Original Curly Wig</a></li>
                        <li><a class="dropdown-item" href="{{ route('fringewig') }}">Fringe Wig</a></li>
                        <li><a class="dropdown-item" href="{{ route('shortcutwig') }}">Short Cut Wig</a></li>
                        <li><a class="dropdown-item" href="{{ route('headbandwig') }}">All product</a></li>
                        <li><a class="dropdown-item" href="{{ route('hairbundle') }}">Hair Bundles</a></li>
                        <li><a class="dropdown-item" href="{{ route('wigcombo') }}">Wig Combo</a></li>
                    </ul>
          </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">ABOUT US</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('newarrivals') }}">NEW ARRIVALS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hairtools') }}">HAIR TOOLS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('howtoorder') }}">HOW TO ORDER</a>
                </li>

            </ul>
        </div>

    </nav>
    <!-- end of navbar -->

       <main class="">
            @yield('content')
        </main>

     <!-- footer section -->

<footer class="main-footer" >

    <div class="container" data-aos="zoom-in">

        <!-- 🔥 TOP SECTION (Brand + Writeup) -->
        <div class="text-center footer-top">

            <!-- Brand space -->
             <a class="navbar-brand d-flex align-items-center justify-content-center gap-2 m-0" href="{{ route('welcome') }}">
                <img src="../assets/img/Kings Hair salon logo design.png" alt="Logo" class="logo-img">
                
            </a>

            <!-- Writeup -->
            <p class="footer-text">
                Premium luxury human hair wigs for all occasions
            </p>

        </div>

        <!-- 🔥 SPACE -->
        <div class="my-5"></div>

        <!-- 🔥 BOTTOM SECTION -->
        <div class="row">

            <!-- LEFT COL -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="footer-heading">STORE</h5>
                <p>NO.4 oko street</p>
                <p>MON - SAT : 9 am - 6 pm</p>
                <p>SUN : 12 pm - 6 pm</p>
                <p>Contact Us By</p>
                <p>-Call: 08109529656</p>
                <p>-WA : 07010400454</p>
            </div>

            <!-- CENTER COL 1 -->
             <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="footer-heading">MORE INFO</h5>
                    <ul class="footer-links">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('hairtools') }}">Hair tools</a></li>
                        <li><a href="{{ route('howtoorder') }}">Order Tutorial</a></li>
                    </ul>
                </div>

            <!-- CENTER COL 2 -->
            <div class="col-lg-3 col-md-6 mb-4">
                <h5 class="footer-heading">SERVICE POLICY</h5>
                <ul class="footer-links">
                    <li><a href="{{ route('returnpolicy') }}">Return Policy</a></li>
                    <li><a href="{{ route('shipmentpolicy') }}">Shipment Policy</a></li>
                    <li><a href="{{ route('privacypolicy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}">Terms of Service</a></li>
                </ul>
            </div>

            <!-- RIGHT COL (SOCIALS) -->
            <div class="col-lg-3 col-md-6 mb-4 d-flex flex-column justify-content-end">

                <div class="footer-socials mt-auto">
                     <h5 class="footer-heading">Follow Us</h5>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/2348109529656?text=Hello Kings Hair, I am interested in your wigs. Please assist me."><i class="bi bi-whatsapp"></i></a>
                    <a href="https://x.com/FamzyKings"><i class="bi bi-twitter"></i></a>
                </div>
                <br>
                <div class="kill">
                    &copy; 2026, <a href="{{ route('welcome') }}"><i class="kill">KINGS HAIR</i></a>
                 </div>
            </div>

        </div>

    </div>

</footer>
<!-- end of footer -->
     <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1500,
            // once: true,
            easing: 'ease-in-out'
        });
    </script>

<script src="{{ asset('assets/js/index.js') }}"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {

    const searchToggle = document.getElementById('searchToggle');
    const searchForm = document.getElementById('searchForm');

    if (searchToggle && searchForm) {

        searchToggle.addEventListener('click', function (e) {
            e.preventDefault();
            searchForm.classList.toggle('active');
        });

        // Close when clicking outside
        document.addEventListener('click', function (e) {
            if (!searchForm.contains(e.target) && !searchToggle.contains(e.target)) {
                searchForm.classList.remove('active');
            }
        });

    }
});
</script>

<a href="https://wa.me/2348109529656?text=Hello Kings Hair, I am interested in your wigs. Please assist me."
   class="whatsapp-float"
   target="_blank">

    <i class="bi bi-whatsapp"></i>

</a>
</body>
</html>