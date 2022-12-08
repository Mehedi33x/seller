@extends('backend.master')
@section('content')
    <div>
        <h1 style="font-size: 50px;margin-bottom:20px">Category List</h1>
    </div>
    <div class="m-4">
        <div>
            <a href="{{ route('add.category') }}">
                <button class="btn btn-success" type="submit" style="margin-bottom:20px">Add New Category</button>
            </a>
        </div>
       <div>
        </div> <table class="table table-bordered" style="border: 2px solid black">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    {{-- <th>Category Image</th> --}}
                    <th>Categpry Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorydata as $key => $category)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        {{-- $data->column name --}}
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->description }}</td>
                    </tr>
                @endforeach()
            </tbody>
        </table>
        {{ $categorydata->links() }}
    </div>
@endsection
