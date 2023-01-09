@extends('seller.master')
@section('content')


<div class="container">
    <div style="font-size: 50px; margin-bottom:20px">
        Product List
    </div>
    <table class="table table-bordered" style="border: 2px solid black">
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Image</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Specification</th>
                <th scope="col">Warranty</th>
                <th scope="col">Stocks</th>
                <th scope="col">Action</th>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
        </thead>
@endsection