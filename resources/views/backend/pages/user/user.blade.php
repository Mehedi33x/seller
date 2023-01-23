@extends('backend.master')
@section('content')
    <h1 style="font-size: 50px">User List</h1>
    <div class="m-4">
        <a href="{{ route('add.user') }}" class="mt-5">
            <button type="button" class="btn btn-success"> + Add User</button>
        </a>
        <br><br>
        <table class="table table-bordered" style="border: 2px solid black">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact-Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($showData->all()); --}}
                @foreach ($showData as $key => $userData)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td scope="col">{{ $userData->name }}</td>
                        <td scope="col">{{ $userData->email }}</td>
                        <td scope="col">{{ $userData->contact }}</td>
                        <td scope="col">{{ $userData->address }}</td>
                        <td scope="col">{{ $userData->role }}</td>
                        <td>

                            {{-- View --}}
                            <a href="" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                            {{-- Edit --}}
                            <a href="{{ route('edit.user',$userData->id) }}" class="btn btn-primary"><i
                            class="fa-solid fa-pen-to-square"></i>
                                {{-- Delete --}}
                                <a href="{{ route('delete.user', $userData->id) }}"
                                    onclick="return confirm('Are you sure to delete?')" class='btn btn-danger'>
                                    <i class="fa-solid fa-trash-can"></i>
                                </a>
                                </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $showData->links() }}
    </div>
@endsection
