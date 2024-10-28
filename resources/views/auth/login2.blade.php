<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iPhone 16 Pro Max Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f4f8; /* Background color for the whole page */
        }

        .iphone-container {
            position: relative;
            width: 375px; /* iPhone width */
            height: 812px; /* iPhone height */
            border-radius: 40px; /* Rounded corners */
            overflow: hidden;
            background: #ffffff; /* iPhone background */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Shadow for depth */
            /* iPhone screen border */
            border: 16px solid #333; /* Outer border color */
            background-image: url('path/to/your/background.jpg'); /* iPhone screen background image */
            background-size: cover; /* Cover the entire screen */
            background-position: center; /* Center the background */
        }

        .screen {
            position: absolute;
            top: 16px; /* Top inset */
            left: 16px; /* Left inset */
            right: 16px; /* Right inset */
            bottom: 16px; /* Bottom inset */
            border-radius: 32px; /* Inner screen rounded corners */
            background-color: #ffffff; /* Inner screen background */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        h1 {
            color: #333;
            font-size: 24px; /* Adjusted size */
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%; /* Full width */
        }

        label {
            text-align: left;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            font-size: 16px;
            background-color: #f9fafb;
            transition: border-color 0.3s;
        }

        input:focus {
            border-color: #2563eb;
            outline: none;
        }

        button {
            background-color: #2563eb;
            color: white;
            padding: 12px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #1d4ed8;
        }

        a {
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }

        a:hover {
            color: #1d4ed8;
        }

        p {
            margin-top: 20px;
            font-size: 14px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="iphone-container">
    <div class="screen">
        <h1>Login</h1>
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
</div>

</body>
</html>
