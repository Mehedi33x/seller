@extends('backend.master')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
        integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
        crossorigin="anonymous">

    {{-- form start --}}

    <h1 style="text-align: center">User Registration Form</h1>


    <div class="container" style="font-size: 20px" style="margin:0px 70px 0px 70px ">

        <form action="{{ route('store.user') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Name">Name</label>
                <input type="name" class="form-control" id="Name" placeholder="Name" name="name">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="Email1" placeholder="Email" name="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="tel" class="form-control" id="contact" placeholder="contact" name="contact">
                @error('contact')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="password" name="password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div>
            <div class="form-group">
                <label for="Inputselect">Address</label>
                <textarea id="address" name="address" class="form-control" rows="4" cols="50" placeholder="Address"></textarea>
            </div>

            <div class="form-group">
                <label for="Inputselect" name="designation">Select Your Designation</label>
                <select name='designation' class="form-control">
                    <option value="Admin">Admin</option>
                    <option value="Developer/Editor">Developer/Editor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Register</button>
        </form>
    </div>
@endsection
