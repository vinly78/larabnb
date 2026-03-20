<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ $title ?? 'LaraBNB' }}</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="{{ route('home') }}" style="text-decoration:none; color: inherit;">LaraBNB</a>
        </div>
        <nav>
            <a href="#" class="btn">Login</a>
            <a href="#" class="btn">Register</a>
        </nav>
    </header>
    @yield('content')
    <footer>
        © 2026 LaraBnb Vacation Rentals. Built with Laravel.
    </footer>
</body>
</html>