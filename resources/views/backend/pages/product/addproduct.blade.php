@extends('backend.master')
@section('content')
    <div class="container" style="font-size:50px; margin-bottom:20px">
        Add New Product
    </div>
    <div class="container">
        <form action="{{ route('store.product') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" placeholder="Name" name="name">
                @error('name')
                    <span class="text-message">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="number" min='0' class="form-control" id="price" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <label for="specifications">Specifications</label>
                <textarea id="address" name="specifications" class="form-control" rows="4" cols="50"
                    placeholder="Specifications"></textarea>
            </div>
            <div class="mb-3">
                <label for="specifications">Warranty Information</label>
                <input type="number" class="form-control" id="warranty_information" placeholder="Warranty Information"
                    name="warranty_information">

            </div>
            <div class="mb-3">
                <label for="stock">Stock</label>
                <input type="number" min="0" class="form-control" id="stock" placeholder="Stock" name="stocks">
            </div>
            <div>
                <a href="">
                    <button type="submit" class="btn btn-success">Submit</button>
                </a>
            </div>
        </form>
    </div>
@endsection
