@extends('backend.master')
@section('content')
    <div class="container">
        <h1 style="align-content:center;margin:10px 0 20px 0    ;font-size:40px">Product Table</h1>
        <a href="{{ route('add.product') }}" class="btn btn-success" style="margin: 0 20px 0 20px">+ Add Product</a>
        <div class="table">
            <table class="table table-bordered" style="border: 2px solid black;margin-top:20px">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        {{-- <th scope="col">Image</th> --}}
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Warranty</th>
                        <th scope="col">Specifications</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($productData as $key => $product)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>


                            <td><img width="60px" src="{{ url('/uploads/product', $product->image) }}"></td>


                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }} BDT</td>
                            <td>{{ $product->category }}</td>
                            <td>{{ $product->quantity }} </td>
                            <td>{{ $product->warranty }} Months</td>
                            <td>{{ $product->specifications }}</td>

                            <td>
                                {{-- view --}}
                                <a href="" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                                {{-- edit --}}
                                <a href="{{ route('edit.product') }}"class="btn btn-success"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                {{-- delete --}}
                                <a href="{{route('delete.product')}}"class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $productData->links() }}
        </div>
    </div>
@endsection
