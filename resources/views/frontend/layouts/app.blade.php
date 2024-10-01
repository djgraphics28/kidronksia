<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Security Recruitment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            background-color: #f5f5f5;
        }

        .navbar {
            background-color: #4CAF50;
        }

        .navbar .nav-link {
            color: #0e0e0e;
        }

        .navbar .nav-link:hover {
            color: #d4d4d4;
        }

        .company-name {
            font-size: 1.5rem;
            color: #121212;
        }

        footer {
            background-color: #4CAF50;
            color: #232323;
            position: relative;
            width: 100%;
        }

        footer p {
            margin: 0;
        }

        h1 {
            color: #4CAF50;
        }

        /* Jobs Button */
        .btn-jobs {
            background-color: #4CAF50;
            color: #fff !important;
            padding: 8px 16px;
            border-radius: 20px;
            /* Rounded corners */
            border: 1px solid transparent;
            text-align: center;
        }

        .btn-jobs:hover {
            background-color: #45a049;
            /* Slightly darker green on hover */
            color: #fff;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Top Menu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Company Logo" width="50" height="50">
                <span class="company-name">KIDRON KSIA Recruitment Agency</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <!-- Add custom class for the Jobs button -->
                        <a class="nav-link btn-jobs" href="{{ route('jobs') }}">Apply Now!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Security Co. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
