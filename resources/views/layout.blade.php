<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Eloquent ORM - CRUD</title>
    <!-- Lexend Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;700&display=swap">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

  
</head>
<body>
    <div class="container">
        <h1>Laravel Eloquent ORM - CRUD Operations</h1>
        <div class="row">
            <div class="col-md-12 bg-warning-subtle">
                <h4>@yield('title')</h4>
            </div>
        </div>
        <!-- Dark Mode Toggle Button -->
        <div class="dark-mode-toggle">
            <button id="darkModeToggle" class="btn btn-secondary">Toggle Dark Mode</button>
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
    <script src="{{asset('assets/js/darkMode.js')}}"></script>
</body>
</html>
