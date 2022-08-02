@extends('login.layout_login')

@section('title', 'Sign Up')

@section('content')
    <div class="sign_up p-10 border-2 text-center w-4/4 lg:w-1/4 m-auto mt-24 rounded-lg shadow-lg shadow-cyan-500/50">
        <form action="{{ route('check_sign_up') }}" method="post">

            <h1 class="text-4xl font-bold pb-12">Sign Up</h1>
            @csrf
            <div class="flex bg-[#f7f6f6]  mt-6">
                <i class="fa-solid fa-user my-auto px-6"></i>
                <input type="text" class="flex-1 py-3 pl-2 border-none bg-[#f7f6f6]" name="name"
                       value="{{ Request::old('name') }}"
                       placeholder="User name">
            </div>
            <div class="flex bg-[#f7f6f6]  mt-6">
                <i class="fa-solid fa-envelope my-auto px-6"></i>
                <input type="email" class="flex-1 py-3 pl-2 border-none bg-[#f7f6f6]"
                       value="{{ Request::old('email') }}" name="email" placeholder="Email">
            </div>
            <div class="flex bg-[#f7f6f6] mt-6">
                <i class="fa-solid fa-lock px-6 my-auto"></i>
                <input type="password" class="flex-1 py-3 pl-2 border-none bg-[#f7f6f6]" name="password"
                       placeholder="Password">
            </div>
            <button class="text-center text-2xl bg-black w-full text-white py-2  mt-12 hover:text-gray-200">Sign up
            </button>
            <div class="flex mt-6 justify-between">
                <a class="flex border-2 px-4 lg:px-8 py-2 text-blue-700 hover:cursor-pointer hover:bg-gray-200 ">
                    <i class="fab fa-facebook-square  my-auto"></i>
                    <h1 class="ml-4 font-semibold">Facebook</h1>
                </a>
                <a class="flex border-2 px-4 lg:px-8 py-2 text-blue-700 hover:cursor-pointer hover:bg-gray-200 ">
                    <img src="{{ asset('storage/google-18px.svg') }}" alt="">
                    <h1 class="ml-4 font-semibold">Google</h1>
                </a>
            </div>
            <div class="inline-flex mx-auto mt-24">
                <h1>Already have an account?</h1>
                <a href="{{ route('sign_in') }}" class="text-blue-700 ml-6">Sign in</a>
            </div>
        </form>

    </div>
    @if ( session('error'))
        <div class="alert alert-danger text-danger" style="color: red"> {{ session('error') }}  </div>
    @endif
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
@endsection
