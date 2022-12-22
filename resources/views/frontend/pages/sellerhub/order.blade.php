@extends('frontend.master')
@section('content')

<div class="container" style="margin-top:30px;margin-bottom:20px">
    <h2 style="font-size: 50px; margin-bottom:20px">Order List</h2>
    
    <table class="table table-bordered" style="border: 2px solid black">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product name</th>
                <th scope="col">Category</th>
                <th scope="col">Customer Id</th>
                <th scope="col">Order Date</th>
                <th scope="col">Shipping Date</th>
                <th scope="col">Status</th>
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
                <td>dxvd</td>
                <td>dxvd</td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                          Action
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Edit</a></li>
                          <li><a class="dropdown-item" href="#">Delete</a></li> 
                        </ul>
                      </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection