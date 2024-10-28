<!-- resources/views/animals/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    <title>Create Animals</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Lexend, sans-serif;
            background: linear-gradient(to bottom, #e0f7fa, #ffffff);
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #2196F3;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        label {
            font-weight: bold;
            color: #333;
        }
        input, button {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Create New Animal</h1>
        <a href="{{ route('entry') }}">
            <i class="fas fa-arrow-left"></i> Back to Entry Page
        </a>

        <form action="{{ route('animals.store') }}" method="POST">
            @csrf
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" required>
            <label for="species">Species: </label>
            <input type="text" name="species" id="species" required>
            <label for="age">Age: </label>
            <input type="number" name="age" id="age" required>
            <button type="submit">Create Animal</button>
        </form>
    </div>
</body>
</html>
