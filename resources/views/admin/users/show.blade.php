@extends('admin.admin_layout')
@section('title','Detail User')
@section('content')
    <h1>Detail User</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Name</th>
            <td> {{$user->name}} </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>
                {{$user->email}}
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>{{$user->password}}</td>
        </tr>
        <tr>
            <th>Roles</th>
            <td>
                {{ $user->role == 0 ? 'User':'Admin' }}
            </td>
        </tr>
        <tr>
            <th>Created_at</th>
            <td>
                {{$user->created_at}}
            </td>
        </tr>
        <tr>
            <th>Updated_at</th>
            <td>
                {{$user->updated_at}}
            </td>
        </tr>
    </table>
    <a class="btn btn-primary" href="{{ route('admin.index') }}">Back</a>
@endsection
