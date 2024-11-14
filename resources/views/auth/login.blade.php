<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <!-- Add Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="top-bar">
        <a href="{{ route('entry') }}" class="home-link">
            <i class="fas fa-home"></i> Home Page
        </a>
    </div>
    

    <div class="container">
        <h1>Login</h1>

        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf

            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Enter your email">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password">

            <button type="submit">Login</button>

            <p>
                Don't have an account? <a href="/register">Register</a>
            </p>
        </form>
    </div>
</body>
</html>
