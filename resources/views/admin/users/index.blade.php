@extends('admin.admin_layout')

@section('content')
    <h1>User Page</h1>
    {{--    <a href="/foods/create" class="btn btn-primary">Create new food</a>--}}
    <a href="{{route('admin.create')}}" class="btn btn-primary">Create new user</a>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Roles</th>
            <th></th>
        </tr>
        </thead>

        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->role == 1 ?'Admin' : 'User' }}</td>
                <td>
                    <a href="/admin/{{ $user->id }}">Detail</a>
                    <a href="admin/{{ $user->id }}/edit">Edit</a>
                    <form action="/admin/{{ $user->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa bản ghi này')">Delete
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>
@endsection
