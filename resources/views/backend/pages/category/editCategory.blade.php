@extends('backend.master')
@section('content')
    <div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" style="font-size: 20px; margin-bottom:10px;font:bold">Category Name</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                {{-- <select class="form-select" aria-label="Select Category" name="category_name" id="category_name">
                    <option value="Smart Phones">Smart Phones</option>
                    <option value="Laptops">Laptops</option>
                    <option value="Headphone & Speaker">Headphone & Speaker</option>
                    <option value="Power Bank">Power Bank</option>
                    <option value="Smart Watch">Smart Watch</option>
                    <option value="Tablets">Tablets</option>
                    <option value="Networking">Networking</option>
                    <option value="Action Camera & Gimble">Action Camera & Gimble</option>
                    <option value="Gaming">Gaming</option>
                </select> --}}
            </div>

            <div class="mb-3">
                <p style="font-size: 20px; margin-bottom:10px; border:2px font:bolder">Description</p>
                <textarea id="description" name="description" rows="10" cols="50">{{ $editCategory->description }}</textarea>
            </div>
            <div class="mb-3"style="font-size: 20px; margin-bottom:10px;font:bold">
                <label for="image">Image</label>
                <input type="file" min="0" class="form-control" id="image" placeholder="Image" name="image">
            </div>
            <div><button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>
@endsection
