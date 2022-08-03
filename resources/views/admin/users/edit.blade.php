@extends('admin.admin_layout')
@section('title','Edit User')

@section('content')

    <h1>Edit user id = {{ $user->id }}</h1>
    <form method="post" action="/admin/{{ $user->id }}">

        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="">User name</label>
            <input type="text" class="form-input" name="name" value="{{ $user->name }}"/>
        </div>
        <div class="form-group">
            <label class="">Email</label>
            <input type="email" class="form-input" name="email" value="{{ $user->email }}"/>
        </div>
        <div class="form-group">
            <label class="">Password</label>
            <input type="password" class="form-input" name="password" value="{{ $user->password }}"/>
        </div>
        <div class="form-group">
            <label for="role">Roles</label>
            <select name="role" class="form-control" id="status">
                <option value="0" @if($user->role == 0) selected="selected" @endif>User</option>
                <option value="1" @if($user->role == 1) selected="selected" @endif>Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
