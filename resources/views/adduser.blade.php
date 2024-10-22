@extends('layout')

@section('title')
    Add New User    
@endsection

@section('content')
    <div class="container">
     

        <div class="card">
            <div class="card-header">
                <h5>Create User Form</h5>
            </div>
            <div class="card-body">
                <form action="{{route('user.store')}}" method="POST">
                    @csrf <!-- CSRF token for form submission protection -->

                    <div class="form-group">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="age" class="form-label">Age:</label>
                        <input type="number" id="age" name="age" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="city" class="form-label">City:</label>
                        <input type="text" id="city" name="city" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add User</button>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a> <!-- Back Button -->
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
