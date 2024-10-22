<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
<body>
    {{-- <h3><a href="{{ route('entry') }}">Go Back to Portal page</a></h3> --}}
    
    <a href="{{ route('entry') }}" class="home-link">Home Page</a>
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
