<!-- resources/views/animals/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Animal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #e0f7fa, #ffffff); /* Light blue to white gradient */
            margin: 0;
            padding: 20px;
        }
        .container {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #2196F3; /* Blue color */
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            color: #333;
        }
        input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }
        input:focus {
            border-color: #2196F3; /* Change border color on focus */
            outline: none;
        }
        button {
            padding: 10px;
            margin-top: 20px;
            background-color: #2196F3; /* Blue color */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #1e88e5; /* Darker blue on hover */
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #2196F3; /* Blue color */
            font-size: 1.1em;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit Animal</h1>

    <!-- Form for editing the animal -->
    <form action="{{ route('animals.update', $animal->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Specifies that this is a PUT request -->

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $animal->name }}" required>

        <label for="species">Species:</label>
        <input type="text" name="species" id="species" value="{{ $animal->species }}" required>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" value="{{ $animal->age }}" required>

        <button type="submit">Update Animal</button>
    </form>

    <a href="{{ route('animals.index') }}" class="back-link">
        <i class="fas fa-arrow-left"></i> Back to Animal List
    </a>
</div>

</body>
</html>
