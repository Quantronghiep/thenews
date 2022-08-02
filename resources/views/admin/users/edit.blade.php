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
                <?php
                $selected_active = '';
                $selected_disabled = '';
                if (Request::old('role') !== null) {
                    switch (Request::old('role')) {
                        case 0:
                            $selected_disabled = 'selected';
                            break;
                        case 1:
                            $selected_active = 'selected';
                            break;
                    }
                }
                ?>
                <option value="0" <?php echo $selected_disabled; ?>>User</option>
                <option value="1" <?php echo $selected_active ?>>Admin</option>
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
