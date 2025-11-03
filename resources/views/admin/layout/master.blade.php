<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <!-- Travel Booking Navbar -->
    <nav class="navbar navbar-expand-lg travel-navbar">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand fw-bold" href="/">Travel.Com</a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="/flights">Flights</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hotels">Hotels</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/rent_a_car">Rent a Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Deals</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            More
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="moreDropdown">
                            <li><a class="dropdown-item" href="#">Travel Guides</a></li>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                            <li><a class="dropdown-item" href="#">Blog</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Call-to-action -->
                <a href="#" class="btn btn-outline-light ms-lg-3 rounded-pill px-4">Book Now</a>
            </div>
        </div>
    </nav>



    <!-- Sidebar -->
    <nav class="sidebar bg-light shadow">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="/" class="nav-link active">
                    <i class="bi bi-house-door-fill me-2"></i>Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="bi bi-person-fill me-2"></i>Users
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('roles.index') }}" class="nav-link">
                    <i class="bi bi-people me-2"></i>Roles

                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-person-fill me-2"></i>Airlines
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-person-fill me-2"></i>Airports
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-person-fill me-2"></i>Flight Booking
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-person-fill me-2"></i>Payment
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-person-fill me-2"></i>Hotel
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-graph-up me-2"></i>Analytics
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-gear-fill me-2"></i>Settings
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a>
            </li>
        </ul>
    </nav>

    <!-- Main Content Area -->
    <main class="content" >
        @yield('content')
    </main>





    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    @yield('scripts')


</body>

</html>