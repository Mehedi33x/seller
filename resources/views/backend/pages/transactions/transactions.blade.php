@extends('backend.master')
@section('content')
<div class="container">
    <h2 style="font-size: 50px; margin-bottom:20px">Customer List</h2>

    <div>
        <a href="">
            <button type="submit" class="btn btn-success" style="margin-bottom: 20px">Add New Customer</button>
        </a>
    </div>
    <table class="table table-bordered" style="border: 2px solid black">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>dxvd</td>
                <td>dxvd</td>
                <td>
                    <button class="btn btn-success" type="submit">
                        <a href=""><i class="fa-solid fa-eye"></i></a></button>
                    <button class="btn btn-primary" type="submit">
                        <a href=""><i class="fa-solid fa-pen-to-square"></i></a></button>
                    <button class="btn btn-danger" type="submit">
                        <a href="" onclick="return confirm('Are you sure to Delete?')"><i class="fa-solid fa-trash-can"></i></a></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
