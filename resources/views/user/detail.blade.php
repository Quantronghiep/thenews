@extends('user.layouts.master')

@section('title', 'Chi tiet')

@section('content')

    <div class="app_container pb-6 lg:pb-12 border-b-2 border-gray-200 ">
        @include('user.layouts.navigation')

        <div class="lg:grid lg:grid-cols-4 lg:gap-16 lg:mt-6">
            <div class="lg:col-span-3 pb-3">
                <div class="text-xl border-gray-400 border-l-4 hidden lg:block">
                    <a href="{{ route('home') }}" class="font-bold ml-4">Home</a> >
                    <a href="{{ route('list') }}" class="font-bold">World</a> >
                    <a href="" class="font-bold text-[#0876ff]"> What One Photo Tells Us About North Korea’s Nuclear
                        Program</a>
                </div>
                <div class="bg-gray-200 py-2 px-4 text-base lg:text-xl font-semibold text-gray-700 mt-4">
                    WORLD
                </div>

                <div class="text-2xl lg:text-4xl mt-4 font-bold">What One Photo Tells Us About North Korea’s Nuclear
                    Program
                </div>
                <div class="flex text-center mt-4 justify-between">
                    <div class="flex text-center text-gray-500">
                        <i class="fa-solid fa-clock "></i>
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

                <img src="{{ asset('storage/trieutien.png') }}" class="w-full mt-6" alt="">
                <p class="text-center mt-2 text-sm lg:text-base text-gray-500">Clues from a propaganda photo reveal
                    details
                    about North Korea’s expanding weapons programs and internal politics.</p>
                <div class="mt-6 text-lg leading-8 tracking-normal lg:tracking-wide text-justify">Lorem ipsum dolor sit
                    amet consectetur adipisicing
                    elit. Fuga ipsum impedit fugiat sit omnis et. Aliquam nobis, impedit neque molestias natus dolor
                    consequatur et voluptatibus repudiandae inventore beatae aut nostrum?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel soluta molestias, blanditiis ex
                    sunt animi repellat. Dicta aliquid quis debitis nihil delectus in ipsum, at voluptates ratione,
                    obcaecati ipsa exercitationem?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ipsum impedit fugiat sit omnis et.
                    Aliquam nobis, impedit neque molestias natus dolor consequatur et voluptatibus repudiandae
                    inventore beatae aut nostrum?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel soluta molestias, blanditiis ex
                    sunt animi repellat. Dicta aliquid quis debitis nihil delectus in ipsum, at voluptates ratione,
                    obcaecati ipsa exercitationem?
                    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ipsum impedit fugiat sit omnis
                    et. Aliquam nobis, impedit neque molestias natus dolor consequatur et voluptatibus repudiandae
                    inventore beatae aut nostrum?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel soluta molestias, blanditiis ex
                    sunt animi repellat. Dicta aliquid quis debitis nihil delectus in ipsum, at voluptates ratione,
                    obcaecati ipsa exercitationem?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ipsum impedit fugiat sit omnis et.
                    Aliquam nobis, impedit neque molestias natus dolor consequatur et voluptatibus repudiandae
                    inventore beatae aut nostrum?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel soluta molestias, blanditiis ex
                    sunt animi repellat. Dicta aliquid quis debitis nihil delectus in ipsum, at voluptates ratione,
                    obcaecati ipsa exercitationem?


                </div>
                <p class="float-right font-bold text-2xl mt-32">Kevin</p>

                <div class="flex justify-between clear-both text-sm  text-gray-500 text-center my-auto mt-48">
                    <div class="flex my-auto">
                        <a href="">
                            <div class="border-2 border-red px-2 py-2 text-center hover:bg-[yellow]">
                                <i class="fa-solid fa-arrow-left-long"></i>
                            </div>
                        </a>

                        <a href="">
                            <div class="border-2 border-red px-2 py-2 ml-4 hover:bg-[yellow]">
                                <i class="fa-solid fa-bookmark"></i>
                                <h1 class="ml-2 float-right">Save</h1>
                            </div>
                        </a>
                    </div>
                    <ul class="flex gap-2  lg:gap-4">
                        <li class="rounded-full border-2 py-2 px-3 hover:bg-[yellow]"><a href="#">Share</a></li>
                        <li class="rounded-full border-2 py-2 px-4 hover:bg-[yellow]"><a href="#"><i
                                    class="fa-brands fa-facebook-f"></i></a></li>
                        <li class="rounded-full border-2 py-2 px-3 hover:bg-[yellow]"><a href="#"><i
                                    class="fa-brands fa-twitter"></i></a></li>
                        <li class="rounded-full border-2 py-2 px-3 hover:bg-[yellow] hover:cursor-pointer"><a href=""><i
                                    class="fa-solid fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="mt-4 rounded-lg border-2 p-6">
                    <h1 class="text-xl border-b-2 border-black inline-block">Comment</h1>
                    <input type="text" placeholder="Add a comment..." class="mt-2 block w-full border-2 p-4">
                    <div class="mt-4">
                        <div class="">

                            <div class="relative">
                                <a href="" class="mt-1 absolute">
                                    <img src="{{ asset('storage/giaosu.png') }}" class="rounded-full w-9 h-9" alt="">
                                </a>
                                <div class="ml-14 text-base lg:text-lg">
                                    <h1 class="font-semibold  float-left mr-2  ">Trong Hiep</h1>
                                    <h2 class="  text-justify">Lorem ipsum dolor sit Lorem ipsum s qui dicta dolorum
                                        maiores laborum harum.</h2>
                                </div>
                            </div>
                            <div class="ml-14 mt-2 flex gap-10">
                                <div class="flex my-auto">
                                    <i class="fa-solid fa-thumbs-up text-gray-300"></i>
                                    <h2 class="ml-2 -mt-1">15</h2>
                                </div>
                                <div class="text-base">Reply</div>
                                <div class="">Share</div>
                            </div>
                        </div>

                        <div class="mt-2">

                            <div class="relative">
                                <a href="" class="mt-1 absolute">
                                    <img src="{{ asset('storage/giaosu.png') }}" class="rounded-full w-9 h-9" alt="">
                                </a>
                                <div class="ml-14 text-base lg:text-lg">
                                    <h1 class="font-semibold my-auto float-left mr-2">Trong Hiep</h1>
                                    <h2 class=" my-auto text-justify">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Voluptates volu Lorem ipsum dolorsllitia eelectus qui dicta
                                        dolorum maiores laborum harum.</h2>
                                </div>
                            </div>
                            <div class="ml-14 mt-2 flex gap-10">
                                <div class="flex my-auto">
                                    <i class="fa-solid fa-thumbs-up text-gray-300"></i>
                                    <h2 class="ml-2 -mt-1">15</h2>
                                </div>
                                <div class="">Reply</div>
                                <div class="">Share</div>
                            </div>
                        </div>
                        <div class="mt-2">

                            <div class="relative">
                                <a href="" class="mt-1 absolute">
                                    <img src="{{ asset('storage/giaosu.png') }}" class="rounded-full w-9 h-9" alt="">
                                </a>
                                <div class="ml-14 text-base lg:text-lg">
                                    <h1 class="font-semibold my-auto float-left mr-2">Trong Hiep</h1>
                                    <h2 class=" my-auto text-justify">Lorem ipsum dolor sit amet consectetur,
                                        adipisicing elit. Voluptates voluptate veritatis eum, aliquid aliquam inventore
                                        deserunt eligendi omnis doloremque quaerat tenetur, obcaecati eaque enim fugit
                                        magni accusantium. Aliquam, accusamus magnam? Lorem ipsum dolorsllitia eelectus
                                        qui dicta dolorum maiores laborum harum.</h2>
                                </div>
                            </div>
                            <div class="ml-14 mt-2 flex gap-10">
                                <div class="flex my-auto">
                                    <i class="fa-solid fa-thumbs-up text-gray-300"></i>
                                    <h2 class="ml-2 -mt-1">15</h2>
                                </div>
                                <div class="">Reply</div>
                                <div class="">Share</div>
                            </div>
                            <div class="ml-14 flex ">
                                <img src="{{ asset('storage/reply.png') }}" alt="">
                                <h2 class="my-auto">2 answer</h2>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="lg:col-span-1">
                <div class="lg:mt-10">
                    <div class="hidden lg:block">
                        <p class="bg-[#fbff22] p-1 inline-block text-base lg:text-xl font-semibold text-gray-700 -ml-1 lg:ml-0">
                            CATEGORY</p>
                        <ul class="border-2 rounded-lg mt-6 text-xl">
                            @for($i=1 ; $i<6; $i++)

                                <li class="p-4 border-b-2 border-dotted hover:bg-gray-200 last:border-none"><a href=""
                                                                                                               class="w-full block">Polictics</a>
                                </li>
                            @endfor
                        </ul>
                        <div class="lg:flex justify-between border-b-2 border-[#0876FF] mt-8 hidden">
                            <input class="border-none py-2 pl-2 flex-1" type="text" placeholder="Enter your email">
                            <button class="bg-[#0876FF] text-white px-8 text-center font-semibold">Sign up</button>
                        </div>
                    </div>

                    <p class="mt-6 bg-[#fbff22] p-1 inline-block text-base lg:text-xl font-semibold text-gray-700 -ml-1 lg:ml-0">
                        NEWS</p>

                    <div class="">
                        <div class="relative mt-4">
                            <img class="w-full rounded-lg h-56 brightness-50 "
                                 src="{{ asset('storage/tongthong.png') }}" alt="">
                            <div
                                class="absolute left-3 top-3 text-xl text-slate-100 px-4 py-2 border-2 rounded-full border-gray-400">
                                <i class="fa-solid fa-play"></i>
                            </div>
                            <div class="text-lg font-semibold left-3 top-28 absolute text-slate-100 leading-5">
                                Isro launches 104 satellites in a single mission
                            </div>
                            <div class="bottom-2 left-3 absolute text-slate-100 text-sm">2:30 | By Telegraph
                            </div>
                        </div>
                        <div class="relative mt-4">
                            <img class="w-full rounded-lg h-56 brightness-50 " src="{{ asset('storage/girl.png') }}"
                                 alt="">
                            <div
                                class="absolute left-3 top-3 text-xl text-slate-100 px-4 py-2 border-2 rounded-full border-gray-400">
                                <i class="fa-solid fa-play"></i>
                            </div>
                            <div class="text-lg font-semibold left-3 top-28 absolute text-slate-100 leading-5">
                                Isro launches 104 satellites in a single mission
                            </div>
                            <div class="bottom-2 left-3 absolute text-slate-100 text-sm">2:30 | By Telegraph
                            </div>
                        </div>
                        <div class="relative mt-4 hidden lg:block">
                            <img class="w-full rounded-lg h-56 brightness-50 " src="{{ asset('storage/girl.png') }}"
                                 alt="">
                            <div
                                class="absolute left-3 top-3 text-xl text-slate-100 px-4 py-2 border-2 rounded-full border-gray-400">
                                <i class="fa-solid fa-play"></i>
                            </div>
                            <div class="text-lg font-semibold left-3 top-28 absolute text-slate-100 leading-5">
                                Isro launches 104 satellites in a single mission
                            </div>
                            <div class="bottom-2 left-3 absolute text-slate-100 text-sm">2:30 | By Telegraph
                            </div>
                        </div>
                        <div class="relative mt-4 hidden lg:block">
                            <img class="w-full rounded-lg h-56 brightness-50 " src="{{ asset('storage/girl.png') }}"
                                 alt="">
                            <div
                                class="absolute left-3 top-3 text-xl text-slate-100 px-4 py-2 border-2 rounded-full border-gray-400">
                                <i class="fa-solid fa-play"></i>
                            </div>
                            <div class="text-lg font-semibold left-3 top-28 absolute text-slate-100 leading-5">
                                Isro launches 104 satellites in a single mission
                            </div>
                            <div class="bottom-2 left-3 absolute text-slate-100 text-sm">2:30 | By Telegraph
                            </div>
                        </div>
                    </div>
                    <p class="mt-8 bg-[#fbff22] p-1 inline-block text-base lg:text-xl font-semibold text-gray-700 -ml-1 lg:ml-0">
                        VIEW MORE</p>
                    <div class="">
                        <div class="text-xl lg:text-2xl mt-4 font-serif font-semibold ">
                            An Alarmed Base Prods Democrats Into an All-Out War
                        </div>
                        <div class="text-base lg:text-lg mt-4 ">
                            After the election, Democrats debated whether to confront Mr. Trump or seek compromise,
                            but
                            riled-up liberals have pushed party leaders into a fight.
                        </div>
                        <div class="border-dotted border-2 border-gray-200 w-1/3 mt-6 hidden lg:block"></div>
                        <div class="border-2 border-gray-100 mt-3 lg:hidden"></div>
                    </div>
                    <div class="mt-6 ">
                        <div class="text-xl lg:text-2xl font-serif font-semibold ">
                            Transgender Student on the Front Lines of the Rights Battle
                        </div>
                        <div class="text-base lg:text-lg mt-4 ">
                            Gavin Grimm, 17, whose initials are on a case heading to the Supreme Court, has become
                            the
                            new face of the transgender rights movement.
                        </div>
                        <div class="border-2 border-gray-100 mt-3 lg:hidden"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="flex lg:gap-8 mt-4 lg:mt-8 gap-4 overflow-x-auto">
            @for($i=1 ; $i<6 ; $i++)
                <div
                    class="mt-4 flex-shrink-0 lg:shrink lg:mt-0 w-3/5 lg:w-full pb-4 lg:pb-10 rounded-lg border-2 p-2 lg:p-4">
                    <a href="{{route('detail')}}">
                        <img src="{{ asset('storage/girl.png') }}" class="w-full rounded-lg" alt="">
                        <div class="text-base lg:text-xl font-serif font-semibold lg:mt-3">
                            Women Do Like to Compete Against Themselves ...
                        </div>

                        <div class="flex text-center mt-4 justify-between text-sm lg:text-base">
                            <div class="flex text-center">
                                <i class="fa-solid fa-clock text-gray-500"></i>
                                <h1 class="ml-2 -mt-1">26.07.2022</h1>
                            </div>
                            <div class="flex text-center text-gray-500">
                                <div class="flex mr-2 lg:mr-4">
                                    <i class="fa-solid fa-eye "></i>
                                    <h1 class="ml-2 -mt-1">20</h1>
                                </div>
                                <div class="flex">
                                    <i class="fa-solid fa-comment-dots"></i>
                                    <h1 class="ml-2 -mt-1">20</h1>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            @endfor
        </div>
    </div>
@endsection

