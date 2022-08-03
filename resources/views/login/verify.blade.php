@extends('login.layout_forgot_password')

@section('content')
    <div class="bg-light p-5 rounded">
        <h1>Dashboard</h1>
        @if ( session('message'))
            <div class="alert alert-success " style="color: green"> {{ session('message') }}  </div>
        @endif

        Before proceeding, please check your email for a verification link. If you did not receive the email,
        <form action="{{ route('verification.send') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="d-inline btn btn-link p-0">
                click here to request another
            </button>
            .
        </form>
    </div>
@endsection
