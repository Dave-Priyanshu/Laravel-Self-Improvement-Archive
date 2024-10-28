<!-- resources/views/animals/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">

    <title>Animal List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <style>
        body {
            font-family: Lexend, sans-serif;
            background: linear-gradient(to bottom, #e0f7fa, #ffffff); /* Light blue to white gradient */
            margin: 0;
            padding: 20px;
        }
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            color: white;
        }
        .alert-success {
            background-color: #4CAF50; /* Success Green */
        }
        .alert-danger {
            background-color: #f44336; /* Danger Red */
        }
        .container {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            max-width: 1200px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #2196F3; /* Blue color */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #2196F3; /* Blue color */
            color: white;
        }
        a, button {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            background-color: #2196F3;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s;
        }
        a:hover, button:hover {
            background-color: #1e88e5; /* Darker blue on hover */
        }
        .actions {
            display: flex;
            gap: 20px;
        }
        .back-link {
            margin-bottom: 20px;
            display: inline-block;
        }
        form button {
            background-color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Animals</h1>

        <!-- Status Messages -->
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <!-- Back to Entry Page Link -->
        <h3><a href="{{ route('entry') }}">Go Back to Portal page</a></h3>

        <!-- Create Animal Button -->
        <a href="{{ route('animals.create') }}" style="float:right;">
            <button>Create Animal</button>
        </a>

        <!-- Animal Table -->
        <table id="animalTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Species</th>
                    <th>Age</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animals as $animal)
                    <tr>
                        <td>{{ $animal->id }}</td>
                        <td>{{ $animal->name }}</td>
                        <td>{{ $animal->species }}</td>
                        <td>{{ $animal->age }}</td>
                        <td>
                            <!-- Show button, Edit button, and Delete button -->
                            <a href="{{ route('animals.show', $animal->id) }}">Show</a>
                            <a href="{{ route('animals.edit', $animal->id) }}">Edit</a>
                            <form action="{{ route('animals.destroy', $animal->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

<script>
    $(document).ready(function() {
        $('#animalTable').DataTable({
            "paging": true,       // Pagination
            "ordering": true,     // Sorting
            "searching": true     // Searching
        });
    });
</script>
