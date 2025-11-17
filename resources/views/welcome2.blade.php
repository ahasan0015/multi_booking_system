<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Booking System</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css">

    <style>
        body {
            background: linear-gradient(135deg, #1d4ed8, #3b82f6);
            min-height: 100vh;
            color: #fff;
        }
        .hero-box {
            max-width: 650px;
        }
        .btn-custom {
            padding: 10px 25px;
            border-radius: 8px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-transparent px-4 mt-2">
        <a class="navbar-brand fw-bold fs-3" href="#">✈ FlightBooking</a>

        <div class="ms-auto">
            <a href="/login" class="btn btn-light btn-custom me-2">Login</a>
            <a href="/register" class="btn btn-warning btn-custom">Register</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="d-flex justify-content-center align-items-center text-center" style="min-height: 80vh;">
        <div class="hero-box">

            <h1 class="fw-bold mb-3">Welcome to Flight Booking System</h1>
            <p class="lead mb-4">
                A complete MVC-based platform to manage flights, bookings, passengers, and ticketing.
            </p>

            <a href="/login" class="btn btn-light btn-lg px-4 rounded-3 me-2">Login</a>
            <a href="/register" class="btn btn-outline-light btn-lg px-4 rounded-3">Create Account</a>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
