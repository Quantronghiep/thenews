@extends('admin.admin_layout')
@section('title','Create User')

@section('content')

    <h1>Create new food</h1>
    {{--    action='/foods'--}}
    <form method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label class="">User name</label>
            <input type="text" class="form-input" name="name" value="{{ Request::old('name') }}"/>
        </div>
        <div class="form-group">
            <label class="">Email</label>
            <input type="email" class="form-input" name="email" value="{{ Request::old('email') }}"/>
        </div>
        <div class="form-group">
            <label class="">Password</label>
            <input type="password" class="form-input" name="password" value=""/>
        </div>

        <div class="form-group">
            <label for="role">Roles</label>s
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
        <button type="submit" class="btn btn-primary">Save</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
