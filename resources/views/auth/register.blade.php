<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
</head>
<body>

<a href="{{ route('entry') }}" class="home-link">Home Page</a>
<div class="container">
    <h1>Registration</h1>

    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/register" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ old('name') }}">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">

        <button type="submit">Register</button>

        <p>
            Already have an account? <a href="/login">Login</a>
        </p>
    </form>
</div>

</body>
</html>
