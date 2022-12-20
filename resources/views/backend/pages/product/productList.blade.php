@extends('backend.master')
@section('content')
    <div style="font-size: 50px; margin-bottom:20px">
        Product List
    </div>

    <div class="container">
        <div>
            <a href="{{ route('add.product') }}">
                <button type="submit" class="btn btn-success" style="margin-bottom: 20px">Add New Product</button>
            </a>
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
            </thead>
            <tbody>
                @foreach ($productdata as $key => $product)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $product->product_image }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_price }}</td>
                        <td>{{ $product->specifications }}</td>
                        <td>{{ $product->warranty }} months</td>
                        <td>{{ $product->stocks }}</td>
                        <td>
                            <button class="btn btn-success" type="submit">
                                <a href=""><i class="fa-solid fa-eye"></i></a></button>
                            <button class="btn btn-primary" type="submit">
                                <a href=""><i class="fa-solid fa-pen-to-square"></i></a></button>
                            <a href="{{ route('delete.product', $product->id) }}"
                                onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $productdata->links() }}
    </div>
@endsection
