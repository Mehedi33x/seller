@extends('backend.master')
@section('content')
    <div class="container">
        <h2 style="font-size: 50px; margin-bottom:20px">Customer List</h2>
        
        <table class="table table-bordered" style="border: 2px solid black">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Address</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $key=>$customer_data)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$customer_data->user_name}}</td>
                    <td>{{$customer_data->user_email}}</td>
                    <td>{{$customer_data->user_contact}}</td>
                    <td>{{$customer_data->user_address}}</td>
                    <td>{{$customer_data->user_designation}}</td>
                    <td>
                        <button class="btn btn-success" type="submit">
                            <a href=""><i class="fa-solid fa-eye"></i></a></button>
                        <button class="btn btn-primary" type="submit">
                            <a href=""><i class="fa-solid fa-pen-to-square"></i></a></button>
                        <button class="btn btn-danger" type="submit">
                            <a href="" onclick="return confirm('Are you sure to Delete?')"><i class="fa-solid fa-trash-can"></i></a></button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
@endsection
