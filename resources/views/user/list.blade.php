@extends('user.layouts.master')

@section('title', 'List')

@section('content')

    <div class="app_container pb-6 lg:pb-16 border-b-2 border-gray-200 ">
        @include('user.layouts.navigation')

        <div class="lg:grid lg:grid-cols-4 lg:gap-16 lg:mt-6">
            <div class="lg:col-span-3 pb-3">
                <div class="text-xl border-gray-400 border-l-4 hidden lg:block">
                    <a href="{{ route('home') }}" class="font-bold ml-4">Home</a> >
                    <a href="{{ route('list') }}" class="font-bold text-[blue]">World</a>
                </div>
                <div class="bg-gray-200 py-2 px-4 text-base lg:text-xl font-semibold text-gray-700 mt-4">
                    WORLD
                </div>
                <div class="mt-6 lg:float-right flex justify-between">
                    <input class=" p-1 lg:mr-6 text-base lg:text-xl border-2    " type="date">
                    <select class=" px-4 lg:mr-6 text-base lg:text-xl" name="" id="">
                        <option value="">Trends</option>
                        <option value="">News</option>
                        <option value="">Hot</option>
                        <option value="">View more</option>
                    </select>
                    <select class="text-base px-4 lg:text-xl" name="" id="">
                        <option value="">Trends</option>
                        <option value="">News</option>
                        <option value="">Hot</option>
                        <option value="">View more</option>
                    </select>
                </div>


                <div class="mt-6 lg:mt-24 clear-right border-2 rounded-lg px-4 lg:px-8">
                    @for($i=1 ; $i<6 ; $i++)
                        <div class=" border-b-2 border-dotted py-4 lg:py-8">
                            <a href="{{ route('detail') }}" class="block lg:flex">
                                <img src="{{ asset('storage/giaosu.png') }}" class="lg:w-64 lg:h-48" alt="">
                                <div class=" ml-0 lg:ml-6">
                                    <h1 class="font-bold text-lg lg:text-3xl">Hate Crime Is Feared in Shooting of 2
                                        Indians in Kansas
                                    </h1>
                                    <p class="text-lg mt-4 lg:line-clamp-4 hidden tracking-wide">India’s government
                                        expressed shock after one citizen was killed
                                        and another wounded in a bar in suburban Kansas. Another wounded in a bar in
                                        suburban Kansas.</p>
                                    <div class="flex text-center mt-4 lg:mt-16 justify-between">
                                        <div class="flex text-center">
                                            <i class="fa-solid fa-clock text-gray-500"></i>
                                            <h1 class="ml-2 font-semibold -mt-1">26.07.2022</h1>
                                        </div>
                                        <div class="flex text-center text-gray-500">
                                            <div class="flex mr-6">
                                                <i class="fa-solid fa-eye "></i>
                                                <h1 class="ml-2 -mt-1">20</h1>
                                            </div>
                                            <div class="flex">
                                                <i class="fa-solid fa-comment-dots"></i>
                                                <h1 class="ml-2 -mt-1">20</h1>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </a>
                        </div>
                    @endfor
                    <div class="block lg:flex  py-4 lg:py-8">
                        <img src="{{ asset('storage/giaosu.png') }}" class="lg:w-64 lg:h-48" alt="">
                        <div class=" ml-0 lg:ml-6">
                            <h1 class="font-bold text-lg lg:text-3xl">Hate Crime Is Feared in Shooting of 2 Indians in
                                Kansas
                            </h1>
                            <p class="text-lg mt-4 lg:line-clamp-4 hidden tracking-wide">India’s government expressed
                                shock after one citizen was killed
                                and another wounded in a bar in suburban Kansas. Another wounded in a bar in
                                suburban Kansas.</p>
                            <div class="flex text-center mt-4 lg:mt-16 justify-between">
                                <div class="flex text-center">
                                    <i class="fa-solid fa-clock text-gray-500"></i>
                                    <h1 class="ml-2 font-semibold -mt-1">26.07.2022</h1>
                                </div>
                                <div class="flex text-center text-gray-500">
                                    <div class="flex mr-6">
                                        <i class="fa-solid fa-eye "></i>
                                        <h1 class="ml-2 -mt-1">20</h1>
                                    </div>
                                    <div class="flex">
                                        <i class="fa-solid fa-comment-dots"></i>
                                        <h1 class="ml-2 -mt-1">20</h1>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="text-center  w-full">
                    <div class="inline-flex lg:gap-6 gap-2 mt-6 lg:mt-8 ">
                        <div class="">
                            <a href="" class="border-2 lg:px-4 lg:py-2 px-2 py-1 hover:bg-[yellow]"><i
                                    class="fa-solid fa-arrow-left"></i></a>
                        </div>
                        <div class="">
                            <a href="" class="border-2 lg:px-4 lg:py-2 px-2 py-1 hover:bg-[yellow]">2</a>
                        </div>
                        <div class="">
                            <a href="" class="border-2 lg:px-4 lg:py-2 px-2 py-1 hover:bg-[yellow] bg-gray-300">3</a>
                        </div>
                        <div class="">
                            <a href="" class="border-2 lg:px-4 lg:py-2 px-2 py-1 hover:bg-[yellow]">4</a>
                        </div>
                        <div class="">
                            <a href="" class="border-2 lg:px-4 lg:py-2 px-2 py-1 hover:bg-[yellow]"><i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="lg:col-span-1">
                <div class="lg:mt-10">
                    <div class="hidden lg:block">
                        <p
                            class="bg-[#fbff22] p-1 inline-block text-base lg:text-xl font-semibold text-gray-700 -ml-1 lg:ml-0">
                            CATEGORY</p>
                        <ul class="border-2 rounded-lg mt-6 text-xl ">
                            @for($i=1 ; $i < 6 ; $i++)
                                <li class="p-4 border-b-2 border-dotted hover:bg-gray-200 last:border-none"><a href="#"
                                                                                                               class="">Polictics</a>
                                </li>
                            @endfor
                        </ul>
                        <div class="lg:flex justify-between border-b-2 border-[#0876FF] mt-8 hidden">
                            <input class="border-none py-2 pl-2 flex-1" type="text" placeholder="Enter your email">
                            <button class="bg-[#0876FF] text-white px-8 text-center font-semibold hover:opacity-75">Sign
                                up
                            </button>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection
