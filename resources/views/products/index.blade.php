<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700&display=swap" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Table</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #1f1f1f;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            position: relative; /* Ensure positioning for the radial gradient */
        }
        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #00d4ff;
            margin-bottom: 30px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .container {
            max-width: 800px;
            width: 100%;
            background-color: #2a2a2a;
            border-radius: 12px;
            padding: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: linear-gradient(145deg, #232323, #2f2f2f);
            border-radius: 12px;
            overflow: hidden;
        }
        th, td {
            padding: 15px;
            text-align: left;
            font-size: 1rem;
            color: #fff;
        }
        th {
            background-color: #333;
            color: #00d4ff;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
        }
        tr {
            transition: background-color 0.3s ease;
        }
        tbody tr:hover {
            background-color: #444;
        }
        tbody tr:nth-child(even) {
            background-color: #3a3a3a;
        }
        td {
            border-bottom: 1px solid #444;
        }
        td:last-child {
            border-right: none;
        }
        th:last-child {
            border-right: none;
        }
        /* Button-like hover effect */
        tbody tr:hover td {
            color: #00d4ff;
        }
        /* Soft gradient background */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: radial-gradient(circle at center, #00d4ff, transparent);
            opacity: 0.2;
            z-index: -1;
        }
        /* Pagination links */
        .pagination {
            display: flex;
            justify-content: center;
            margin:30px;
        }
        .pagination a {
            color: #00d4ff;
            padding: 10px 15px;
            margin: 0 5px;
            border: 1px solid #00d4ff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .pagination a:hover {
            background-color: #00d4ff;
            color: #000;
        }
        .pagination .active {
            background-color: #00d4ff;
            color: #000;
            border: 1px solid #00d4ff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Products</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Links -->
        <div class="pagination">
            {{ $products->links() }}
        </div>
    </div>
</body>
</html>
