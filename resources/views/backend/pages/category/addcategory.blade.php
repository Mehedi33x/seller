@extends('backend.master')
@section('content')
    <div>
        <form action="{{route('store.category')}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="name" style="font-size: 20px; margin-bottom:10px;font:bold">Category Name</label>
                <select class="form-select" aria-label="Select Category" name="category_name" id="category_name">
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
            </div>
            <div class="mb-3">
                <p style="font-size: 20px; margin-bottom:10px; border:2px font:bolder">Description</p>
                <textarea id="description" name="description" rows="10" cols="50">

                </textarea>
            </div>

            <div><button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>
@endsection
