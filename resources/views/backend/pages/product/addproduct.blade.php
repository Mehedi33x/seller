@extends('backend.master')
@section('content')
    <div class="container">
        <h3 style="font-size: 40px;margin: 0 20px 0 20px"> Add Product</h3>
        <div style="margin: 20px 20px 20px 20px">
            <form action="{{ route('store.Product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="" name="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" min="0" class="form-control" id="price" placeholder=""name="price">
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category">
                        <option value="Smart Phones">Smart Phones</option>
                        <option value="Laptops">Laptops</option>
                        <option value="Headphone & Speaker">Headphone & Speaker</option>
                        <option value="Power Bank">Power Bank</option>
                        <option value="Smart Watch">Smart Watch</option>
                        <option value="Tablets">Tablets</option>
                        <option value="Networking">Networking</option>
                        <option value="Action Camera & Gimble">Action Camera & Gimble</option>
                        <option value="Gaming">Gaming</option>
                    </select>
                    @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" min="0" class="form-control" id="quantity" name="quantity" placeholder="">
                    @error('quantity')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="warranty">Warranty</label>
                    <input type="number" min="0" class="form-control" id="warranty" placeholder=""name="warranty">
                </div>
                <div class="form-group">
                    <label for="specifications">Specifications</label>
                    <textarea class="form-control" id="specifications" name="specifications" rows="3"></textarea>
                </div>
                <div class="mb-3"style="font-size:; margin-bottom:10px;font:bold">
                    <label for="image">Image</label>
                    <input type="file" min="0" class="form-control" id="image" placeholder="Image"
                        name="image">
                </div>
                <div style="margin-top: 20px">
                    <button type="submit" class="btn btn-success">Success</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
