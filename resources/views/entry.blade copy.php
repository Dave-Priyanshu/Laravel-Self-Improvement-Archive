<!-- resources/views/entry.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Page</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 50px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin-bottom: 30px;
            font-size: 2.5em;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
        }

        .link-card {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.2);
            margin: 20px;
            padding: 30px;
            transition: transform 0.3s, background 0.3s;
            display: inline-block;
            width: 200px;
        }

        .link-card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.3);
        }

        .icon {
            font-size: 50px; /* Increased icon size */
            margin-bottom: 15px;
            color: #ffeb3b; /* Bright color for visibility */
        }

        a {
            text-decoration: none;
            color: white;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Portal</h1>
        <div class="link-card">
            <div class="icon">
                <i class="fas fa-users"></i>  <!-- User Icon -->
            </div>
            <a href="{{ route('user.index') }}">Users</a>
        </div>
        <div class="link-card">
            <div class="icon">
                <i class="fas fa-paw"></i>  <!-- Animal Icon -->
            </div>
            <a href="{{ route('animals.index') }}">Animals</a>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
