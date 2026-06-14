<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- GLightbox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/Kings Hair salon logo design.png') }}" alt="Logo" height="80">
        </a>

        <!-- Right Side -->
        <div class="d-flex align-items-center gap-3">

            <!-- Username -->
            <span class="navbar-text">
                {{ Auth::user()->name }}
            </span>

            <!-- Dark Mode Toggle -->
            <div class="theme-toggle">
                <input type="checkbox" id="darkModeToggle" onchange="toggleDarkMode()">
                <label for="darkModeToggle" class="toggle-label">
                    <i class="fas fa-sun icon sun"></i>
                    <i class="fas fa-moon icon moon"></i>
                    <span class="ball"></span>
                </label>
            </div>

            <!-- Logout -->
            <button class="btn btn-outline-light we"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </button>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>
    </div>
</nav>

<!-- Main Layout -->
<div class="d-flex" style="margin-top: 56px; height: calc(100vh - 56px);">

    <!-- Sidebar -->
    <nav id="sidebar">
        <h5 class="text-white p-3">Dashboard Links</h5>

        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link text-white" href="/home">
                    <i class="fas fa-home"></i> Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="/admin/users">
                    <i class="fas fa-users"></i> Users
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="/admin/products">
                    <i class="fas fa-box"></i> View Products
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="/admin/products/create">
                    <i class="fas fa-plus"></i> Add Product
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.payment') }}">
                    <i class="fas fa-credit-card"></i> Payment Settings
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('admin.orders') }}">
                    <i class="fas fa-shopping-cart"></i> Orders
                </a>
            </li>

        </ul>
    </nav>

    <!-- Main Content -->
    <main id="main-content" class="flex-grow-1 p-3">
        @yield('content')
    </main>

</div>

<!-- Footer -->
<footer id="footer" class="text-center py-3">
    <p>&copy; 2024 Company Name. All rights reserved.</p>
</footer>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JS -->
<script src="../assets/js/dashboard.js"></script>

<!-- GLightbox -->
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>

<script>
const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    zoomable: true
});
</script>

<!-- Dark Mode -->
<script>
function toggleDarkMode() {
    document.body.classList.toggle("dark-mode");
}
</script>

<script src="{{ asset('assets/js/index.js') }}"></script>

</body>
</html>