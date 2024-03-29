@extends('backend.master')
@section('content')
    <div>
        <form action="{{ route('store.category') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" style="font-size: 20px; margin-bottom:10px;font:bold">Category Name</label>
                <input type="text" class="form-control" id="name" placeholder="" name="name">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>

            <div class="mb-3">
                <p style="font-size: 20px; margin-bottom:10px; border:2px font:bolder">Description</p>
                <textarea id="description" name="description" rows="10" cols="50">
                </textarea>
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
