<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/script.js') }}"></script>
    {{--    @stack('scripts')--}}
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Bitter');
    </style>

    <title> @yield('title') </title>
</head>

<body>
<div class="app  mt-2 mx-4 lg:mx-20 font-['Roboto']">
@include('user.layouts.header')

@yield('content')

@include('user.layouts.footer')

{{--    @include('script')--}}


</body>

</html>
