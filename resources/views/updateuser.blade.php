@extends('layout')

@section('title')
   Update User Data
@endsection

@section('content')
    <div class="container">
        

        <div class="card">
            <div class="card-header">
                <h5>Update User Form</h5>
            </div>
            <div class="card-body">
                <form action="{{route('user.update',$users->id)}}" method="POST">
                    @csrf <!-- CSRF token for form submission protection -->
                    @method('PUT')

                    {{-- to check errors --}}
                    {{-- <pre>
                        @php
                            print_r($errors->all());
                        @endphp
                    </pre> --}}

                    <div class="form-group">
                        <label for="name" class="form-label" >Name:</label>
                        <input type="text" value="{{ $users->name}}" id="name" name="name" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" value="{{ $users->email}}" id="email" name="email" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="age" class="form-label">Age:</label>
                        <input type="number" value="{{ $users->age}}" id="age" name="age" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="city" class="form-label">City:</label>
                        <input type="text" value="{{ $users->city}}" id="city" name="city" class="form-control" >
                    </div>

                    <button type="submit" class="btn btn-primary">Update User</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary">Back</a> <!-- Back Button -->
                </form>
            </div>
        </div>
    </div>
@endsection
