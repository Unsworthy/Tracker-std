<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Tracer Study')</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="{{ mix('resources/css/dashboard.css') }}" rel="stylesheet">

    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body class="font-sans bg-gray-100">
    <header class="bg-primary text-white">
        <div class="container mx-auto py-6 text-center">
            <h1 class="header-title">@yield('title')</h1>
        </div>
    </header>
    
    <nav>
        <div class="container">
            <div class="logo">Tracer Study</div>
            <div class="navbar-menu">
                <a href="{{ route('dashboard') }}" class="navbar-link">Home</a>
                <div class="dropdown">
                    <a href="#" class="navbar-link">Data Alumni</a>
                    <div class="dropdown-content">
                        <a href="{{ route('alumni.index') }}">Alumni List</a>
                        <a href="#data-courses">Courses</a>
                        <a href="#data-jobs">Jobs</a>
                    </div>
                </div>
                <a href="#statistik" class="navbar-link">Statistik</a>
                <a href="#kontak" class="navbar-link">Kontak</a>
                <a href="{{ route('login') }}" id="loginMenu" class="navbar-link">Login</a>
                <div class="profile" id="profileMenu">
                    <a href="{{ route('profile.show') }}" class="navbar-link">Profil</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container mx-auto py-8">
        @yield('content')
    </div>

    <footer class="bg-white shadow-sm text-center py-6 mt-8">
        <p class="text-gray-500">&copy; 2024 SMK Prakarya Internasional Tracer Study</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
