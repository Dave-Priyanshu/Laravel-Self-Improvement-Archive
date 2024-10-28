<!-- resources/views/animals/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">

    <title>Animal Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Lexend, sans-serif;
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
        .details {
            margin-top: 20px;
            font-size: 1.2em;
            color: #333;
        }
        .details strong {
            color: #4CAF50; /* Green color for labels */
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
    <h1>Animal Details</h1>

    <div class="details">
        <strong>Name:</strong> {{ $animal->name }} <br>
        <strong>Species:</strong> {{ $animal->species }} <br>
        <strong>Age:</strong> {{ $animal->age }} <br>
    </div>

    <a href="{{ route('animals.index') }}" class="back-link">
        <i class="fas fa-arrow-left"></i> Back to Animal List
    </a>
</div>

</body>
</html>
