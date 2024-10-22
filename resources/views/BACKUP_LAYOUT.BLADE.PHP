layout.blade.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Eloquent ORM - CRUD</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 50px;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #007bff;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        a {
            color: #007bff;
        }
        a:hover {
            color: #0056b3;
            text-decoration: none;
        }
        .add-user-btn {
            margin: 15px 15px;
            float: right;
        }
        .bg-warning-subtle {
            background-color: #fff3cd; /* Subtle yellow background */
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .card {
            margin-bottom: 20px;
            border: 1px solid #007bff;
            border-radius: 5px;
        }
        .card-header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            border-radius: 5px 5px 0 0;
        }
        .card-body {
            padding: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laravel Eloquent ORM - CRUD Operations</h1>
        <div class="row">
            <div class="col-md-12 bg-warning-subtle">
                <h4>@yield('title')</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
               @yield('content')
            </div>
        </div>
    </div>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>

this layout looks very clustered and large with punchy colours, i dont like this