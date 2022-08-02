@extends('user.layouts.master')

@section('title', 'Trang chu')

@section('content')
    <div class="app_container lg:pb-16 lg:border-b-2 border-gray-200 ">
        @include('user.layouts.navigation')

        <div class="lg:grid lg:grid-cols-4 lg:gap-10 lg:mt-8">
            <div class="lg:col-span-3 lg:grid lg:grid-cols-3 lg:gap-10 lg:border-b-2 border-gray-200 pb-3 ">
                <a href="{{ route('detail') }}"
                   class="block col-span-2 bg-cover bg-no-repeat bg-center h-48 lg:h-96 w-auto relative -mx-4  lg:mx-0"
                   style="background-image: url({{ asset('storage/trieutien.png') }}) ;">
                    <div
                        class="text-black absolute -bottom-4 left-5 bg-white lg:text-4xl text-lg  lg:pl-10 pl-3 font-semibold pr-3 w-4/5">
                        What One Photo Tells Us About North Korea’s Nuclear Program
                    </div>
                    <p class="text-xl text-slate-800 absolute -bottom-28 left-0 pl-5 hidden lg:block">
                        Clues from a propaganda photo reveal details about North Korea’s expanding weapons programs
                        and
                        internal politics.
                    </p>
                </a>
                <div class="">
                    <div class="flex justify-between mt-8 lg:mt-0 text-center">
                        <div>
                            <p
                                class="bg-[#fbff22] p-1 inline-block lg:text-xl font-semibold text-gray-700 text-base -ml-1 lg:ml-0">
                                TOP STORIES</p>
                        </div>
                        <div class="text-blue-600 mt-1 lg:hidden text-lg">View all</div>
                    </div>


                    <ul class="text-base lg:text-lg">
                        @for($i=1 ; $i<5 ; $i++)
                            <li class="mt-2  lg:pb-1 p-1  border-b-2 border-gray-200">

                                <a href="#" class=" line-clamp-1 lg:line-clamp-none hover:text-gray-600 ">
                                    PM unveils
                                    Shiva statue in
                                    Coimbatore on Mahashivratri
                                </a>
                            </li>

                        @endfor
                        <a href=""
                           class="mt-1  lg:pb-1 p-1  border-b-2 border-gray-200   hidden lg:block hover:text-gray-600">
                            PM unveils Shiva statue in
                            Coimbatore on Mahashivratri
                        </a>
                        <a href=""
                           class="mt-1  lg:pb-1 p-1  border-b-2 border-gray-200  hidden lg:block hover:text-gray-600">
                            PM unveils Shiva statue in
                            Coimbatore on Mahashivratri
                        </a>

                        <a href="" class="mt-1  hidden lg:block hover:text-gray-600">PM unveils Shiva statue in
                            Coimbatore
                            on Mahashivratri</a>
                    </ul>
                </div>
            </div>
            <div class="">
                <div class="lg:bg-stone-100 mt-4 lg:mt-0">
                    <p class="bg-[#fbff22] p-1 inline-block text-base lg:text-xl font-semibold text-gray-700 -ml-1 lg:ml-0">
                        QUICK
                        BITES</p>
                    <div class="pt-8 lg:pt-5 p-5 pb-10 ml-1 -mt-6 lg:mt-0 lg:ml-0 bg-stone-100">
                        <h1 class="text-xl lg:text-3xl font-semibold text-gray-700 ">Stocks Sell Off, Gold
                            Rises Ahead of Trump Speech: Markets
                            Wrap
                        </h1>
                        <p class="mt-5 text-base lg:text-lg">Global stocks retreated, erasing gains for the week as
                            a glum set
                            of
                            European corporate earnings compounded investor nervousness before a major speech from
                            U.S.
                            President Donald Trump. Gold extended its rally as the dollar edged lower.</p>
                        <a href="#" class="text-xl float-right text-blue-800 font-bold lg:hidden">></a>
                        <a href="#" class="text-xl float-right text-blue-800 font-semibold hidden lg:block">Next
                            ></a>
                    </div>
                </div>
                <a href="#" class="text-[#0876FF] font-semibold text-xl mt-6 hidden lg:block">Get the Quick Bites
                    delivered to
                    your inbox daily
                </a>
                <div class="lg:flex justify-between border-b-2 border-[#0876FF] mt-8 hidden">
                    <input class="border-none pl-2 flex-1" type="text" placeholder="Enter your email">
                    <button class="bg-[#0876FF] text-white px-8 py-2 text-center font-semibold">Sign up</button>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-4 gap-10 mt-6">
            <div class="col-span-4 lg:col-span-3 lg:border-b-2 border-gray-200 pb-10">
                <div class="flex justify-between items-center ">
                    <div class="flex  text-center lg:bg-[#f5f5f5] grow mr-8">

                        <button
                            class="bg-gray-100 text-gray-700 px-3 py-1 lg:py-2 lg:px-4 lg:text-xl font-semibold -ml-1 lg:ml-0">
                            FEATURED
                        </button>

                        <div class="text-lg hidden lg:block mt-2 pl-10 pr-20">Mahashivratri symbolizes a union of
                            divinity with a purpose
                            of overcoming
                            darkness and injustice.
                        </div>
                    </div>
                    <a class="text-blue-700 hidden lg:block text-lg font-semibold" href="#">View all</a>
                </div>
                <div class="border-b-2 border-gray-200 lg:border-none -mt-1"></div>
                <div class="mt-4 flex gap-4 lg:gap-8 overflow-x-auto pb-10">
                    <div class="relative flex-shrink-0 lg:w-1/3 w-4/6">
                        <img src="{{ asset('storage/girl.png') }}" class="" alt="">
                        <div
                            class="text-slate-700 absolute -bottom-4  left-3 lg:left-5 bg-white text-sm lg:text-lg font-serif px-3 lg:px-5 font-semibold">
                            Women Do Like to Compete <br> Against Themselves
                        </div>
                    </div>
                    <div class="relative flex-shrink-0 lg:w-1/3 w-4/6  ">
                        <img src="{{ asset('storage/giaosu.png') }}" class=" " alt="">
                        <div
                            class="text-slate-700 absolute -bottom-4  left-3 lg:left-5 bg-white text-sm lg:text-lg font-serif px-3 lg:px-5 font-semibold">
                            Women Do Like to Compete <br> Against Themselves
                        </div>
                    </div>
                    <div class="relative flex-shrink-0 lg:w-1/3 w-4/6 ">
                        <img src="{{ asset('storage/woman.png') }}" class=" " alt="">
                        <div
                            class="text-slate-700 absolute -bottom-4  left-3 lg:left-5 bg-white text-sm lg:text-lg font-serif px-3 lg:px-5 font-semibold">
                            Women Do Like to Compete <br> Against Themselves
                        </div>
                    </div>
                    <div class="relative flex-shrink-0 lg:w-1/3 w-4/6 ">
                        <img src="{{ asset('storage/woman.png') }}" class=" " alt="">
                        <div
                            class="text-slate-700 absolute -bottom-4  left-3 lg:left-5 bg-white text-sm lg:text-lg font-serif px-3 lg:px-5 font-semibold">
                            Women Do Like to Compete <br> Against Themselves
                        </div>
                    </div>

                </div>

            </div>
            <div class="relative hidden lg:block">
                <div class="bg-cover bg-no-repeat bg-center h-64 w-full rounded-lg mt-6 brightness-50 "
                     style="background-image: url({{ asset('storage/tongthong.png') }}) ;">
                </div>
                <div class="absolute top-10 flex items-center left-5">
                    <div class="bg-red-500 h-4 w-4 rounded-full"></div>
                    <div class="ml-3 text-red-500 font-semibold ">Live</div>
                </div>
                <div
                    class="absolute left-5 top-28 text-4xl text-slate-100 px-4 py-2 border-2 rounded-full border-white">
                    <i class="fa-solid fa-play"></i>
                </div>
                <div class="text-xl top-52 left-5 absolute text-slate-100 font-serif">Watch Modi live from <br> G8
                    Summit
                </div>


            </div>

        </div>


        <div class="lg:grid grid-cols-6 gap-8 -mt-4 lg:mt-6">
            <div class="col-span-1">
                <p class="bg-gray-100 p-1 inline-block text-base lg:text-xl font-semibold text-gray-700 -ml-1 lg:ml-0">
                    WORLD NEWS
                </p>
                <div class="border-b-2 border-gray-200 lg:border-none -mt-1"></div>
                <div class="grid grid-rows-2 grid-flow-col gap-4">
                    <div class="">
                        <div class="text-xl lg:text-2xl mt-4 font-serif font-semibold text-slate-800">
                            An Alarmed Base Prods Democrats Into an All-Out War
                        </div>
                        <div class="text-base lg:text-lg mt-4 text-slate-700">
                            After the election, Democrats debated whether to confront Mr. Trump or seek compromise,
                            but
                            riled-up liberals have pushed party leaders into a fight.
                        </div>
                        <div class="border-dotted border-2 border-gray-200 w-1/3 mt-6 hidden lg:block"></div>
                        <div class="border-2 border-gray-100 mt-3 lg:hidden"></div>
                    </div>
                    <div class="">
                        <div class="text-xl lg:text-2xl font-serif font-semibold text-slate-800">
                            Transgender Student on the Front Lines of the Rights Battle
                        </div>
                        <div class="text-base lg:text-lg mt-4 text-slate-700">
                            Gavin Grimm, 17, whose initials are on a case heading to the Supreme Court, has become
                            the
                            new face of the transgender rights movement.
                        </div>
                        <div class="border-2 border-gray-100 mt-3 lg:hidden"></div>
                    </div>
                </div>

            </div>

            <div class="col-span-4">
                <div class="lg:grid grid-cols-3 gap-4 lg:border-l-2 border-gray-200">
                    <div class="col-span-2 lg:border-r-2 border-gray-200 lg:pr-6 lg:pl-6 -mt-6 lg:mt-0">
                        <div class="lg:grid grid-rows-2 grid-flow-col gap-4">
                            <div class="">
                                <div class="text-xl font-semibold text-slate-800 font-serif mt-4 lg:mt-0">
                                    Hate Crime Is Feared in Shooting of 2 Indians in Kansas
                                </div>
                                <div
                                    class="flex justify-between mt-5 border-b-2 border-dotted border-gray-200 pb-5">
                                    <div class="text-base lg:text-lg mr-4 lg:mr-8 text-slate-700">
                                        India’s government expressed shock after one citizen was killed and another
                                        wounded in a bar in suburban Kansas. Another wounded in a bar in suburban
                                        Kansas.
                                    </div>
                                    <img class="h-32 w-32 lg:h-36 lg:w-full" src="{{ asset('storage/tongthong.png') }}"
                                         alt="">
                                    <!-- <div class="bg-cover bg-no-repeat bg-center h-24 w-full"
                                        style="background-image: url(./assets/images/tongthong.png) ;"></div> -->
                                </div>
                                <div class="hidden lg:block">
                                    <div class="text-xl font-semibold text-slate-800 font-serif mt-4">
                                        Uber Lawsuit Puts Spotlight on Rush for Driverless Cars
                                    </div>
                                    <div
                                        class="text-base lg:text-lg border-b-2 border-dotted border-gray-200 pb-4 mt-3 text-slate-700">
                                        The suit, brought by the autonomous car business Waymo, accuses Uber and a
                                        star
                                        engineer, Anthony Levandowski, of planning to steal trade secrets.
                                    </div>
                                </div>

                            </div>

                            <div class="mt-4 lg:mt-0">
                                <div class="text-xl font-semibold text-slate-800 font-serif">
                                    Hate Crime Is Feared in Shooting of 2 Indians in Kansas
                                </div>
                                <div
                                    class="flex justify-between mt-5 border-b-2 border-dotted border-gray-200 pb-5">
                                    <div class="text-base lg:text-lg mr-4 lg:mr-8 text-slate-700">
                                        India’s government expressed shock after one citizen was killed and another
                                        wounded in a bar in suburban Kansas. Another wounded in a bar in suburban
                                        Kansas.
                                    </div>
                                    <img class="h-32 w-32 lg:h-36 lg:w-full bg-cover bg-center"
                                         src="{{ asset('storage/fish.png') }}" alt="">
                                    <!-- <div class="bg-cover bg-no-repeat bg-center h-24 w-full"
                                        style="background-image: url(./assets/images/tongthong.png) ;"></div> -->
                                </div>
                                <div class="hidden lg:block">
                                    <div class="text-xl font-semibold text-slate-800 font-serif mt-4">
                                        Uber Lawsuit Puts Spotlight on Rush for Driverless Cars
                                    </div>
                                    <div class="text-base lg:text-lg  pb-4 mt-3 text-slate-700">
                                        The suit, brought by the autonomous car business Waymo, accuses Uber and a
                                        star
                                        engineer, Anthony Levandowski, of planning to steal trade secrets.
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="lg:border-r-2 border-gray-200 mt-4 lg:mt-0 lg:pr-3">
                        <p class="bg-[#fbff22] p-1 inline-block text-base lg:text-xl font-semibold text-gray-700 -ml-1 lg:ml-0">
                            ENTERTAIMENT</p>
                        <div class="border-b-2 border-gray-200 lg:border-none -mt-1"></div>
                        <div class="">
                            <div class="py-2 lg:py-3 border-b-2 border-dotted border-gray-200  ">
                                <a class="text-base lg:text-lg inline-block  font-serif line-clamp-2 "
                                   href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet
                                    consectetur
                                    adipisicing elit </a>

                            </div>
                            <div class="py-2 lg:py-3 border-b-2 border-dotted border-gray-200  ">
                                <a class="text-base lg:text-lg inline-block  font-serif line-clamp-2 "
                                   href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet
                                    consectetur
                                    adipisicing elit </a>

                            </div>
                            <div class="py-2 lg:py-3 border-b-2 border-dotted border-gray-200  ">
                                <a class="text-base lg:text-lg inline-block  font-serif line-clamp-2 "
                                   href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet
                                    consectetur
                                    adipisicing elit </a>

                            </div>
                            <div class="py-2 lg:py-3 border-b-2 border-dotted border-gray-200  ">
                                <a class="text-base lg:text-lg inline-block  font-serif line-clamp-2 "
                                   href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet
                                    consectetur
                                    adipisicing elit </a>

                            </div>
                            <div class="py-2 lg:py-3 border-b-2 border-dotted border-gray-200   hidden lg:block">
                                <a class="text-base lg:text-lg inline-block  font-serif line-clamp-2 "
                                   href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet
                                    consectetur
                                    adipisicing elit </a>

                            </div>
                            <div class="py-2 lg:py-3 border-b-2 border-dotted border-gray-200   hidden lg:block">
                                <a class="text-base lg:text-lg inline-block  font-serif line-clamp-2 "
                                   href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. amet
                                    consectetur
                                    adipisicing elit </a>

                            </div>
                            <div class="py-3 lg:py-3 border-b-2 border-dotted border-gray-200   hidden lg:block">
                                <a class="text-lg lg:text-lg inline-block  font-serif line-clamp-2 " href="#">Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. amet
                                    consectetur
                                    adipisicing elit </a>

                            </div>
                            <div class="py-3 lg:py-3  hidden lg:block">
                                <a class="text-lg lg:text-lg inline-block  font-serif line-clamp-2 " href="#">Lorem
                                    ipsum dolor sit amet consectetur adipisicing elit. amet
                                    consectetur
                                    adipisicing elit </a>

                            </div>

                        </div>


                    </div>

                </div>
            </div>

            <div class="col-span-1 mt-4 lg:mt-0">
                <p class="bg-gray-100 p-1 inline-block lg:text-xl text-base font-semibold text-gray-700 -ml-1 lg:ml-0">
                    SPORTS NEWS
                </p>
                <div class="border-b-2 border-gray-200 lg:border-none -mt-1"></div>
                <div class="grid grid-rows-2 grid-flow-col gap-4">
                    <div class="mt-2 lg:mt-6 lg:mt-0">
                        <div class="text-xl lg:text-2xl font-serif font-semibold text-slate-800">
                            An Alarmed Base Prods Democrats Into an All-Out War
                        </div>
                        <div class="text-base lg:text-lg mt-4 text-slate-700">
                            After the election, Democrats debated whether to confront Mr. Trump or seek compromise,
                            but
                            riled-up liberals have pushed party leaders into a fight.
                        </div>
                        <div
                            class="border-dotted lg:border-2 border-dotted border-gray-200 w-1/3 mt-6 hidden lg:block">
                        </div>
                    </div>
                    <div class="flex justify-between lg:inline-block items-center -mt-10 lg:mt-0">
                        <!-- <div class=" bg-cover bg-no-repeat h-48 w-full"
                                        style="background-image: url(./assets/images/football.png) ;">
                        </div> -->
                        <div class="">

                            <img src="{{ asset('storage/football.png') }}" class="h-32 lg:h-48 w-96" alt="">
                        </div>
                        <div
                            class="lg:text-2xl text-lg ml-4 mt-4 lg:ml-0 font-serif font-semibold text-slate-800 lg:border-b-2 border-gray-200 pb-4">
                            Series win in Australia hugely satisfying: Upul Tharanga
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:grid grid-cols-6 gap-8 mt-6">
            <div class="col-span-5 ">
                <div class="bg-gray-300 lg:flex justify-between py-2 px-3 hidden">
                    <div class="text-2xl font-semibold ">Videos</div>
                    <div class="text-lg text-blue-600 font-semibold">View all Videos</div>
                </div>
                <div class="">
                    <div
                        class="lg:grid grid-cols-4 gap-4 lg:border-x-2 lg:border-b-2 border-dotted border-gray-200 h-auto">

                        <div class="col-span-3 border-r-2 border-gray-200 mt-5 mb-5">
                            <!-- <ul class="lg:flex mx-auto lg:text-xl text-base justify-between px-5 hidden">
                                <li class=" hover:text-blue-700 text-blue-700 font-semibold">
                                    <a href="">World</a>
                                </li>
                                <li class=" hover:text-blue-700">
                                    <a href="">Polictics</a>
                                </li>
                                <li class=" hover:text-blue-700">
                                    <a href="">Business</a>
                                </li>
                                <li class=" hover:text-blue-700">
                                    <a href="">Opinion</a>
                                </li>
                                <li class=" hover:text-blue-700">
                                    <a href="">Tech</a>
                                </li>
                                <li class=" hover:text-blue-700">
                                    <a href="">Science</a>
                                </li>
                                <li class=" hover:text-blue-700">
                                    <a href="">Health</a>
                                </li>
                                <li class=" hover:text-blue-700">
                                    <a href="">Sports</a>
                                </li>
                                <li class=" hover:text-blue-700">
                                    <a href="">Entertaiment</a>
                                </li>
                                <li class=" hover:text-blue-700">
                                    <a href="">Auto</a>
                                </li>

                            </ul> -->
                            <div class="tab text-lg font-semibold lg:flex justify-between px-4 hidden ">
                                <button class="tablinks text-blue-600 " onclick="openImage(event, 'Trending')">
                                    Trending
                                </button>
                                <button class="tablinks" onclick="openImage(event, 'News')">News</button>
                                <button class="tablinks" onclick="openImage(event, 'Entertaiments')">Entertaiments
                                </button>
                                <button class="tablinks" onclick="openImage(event, 'Celebs')">Celebs</button>
                                <button class="tablinks" onclick="openImage(event, 'Movie')">Movie</button>
                                <button class="tablinks" onclick="openImage(event, 'Lifestyle')">Lifestyle</button>
                                <button class="tablinks" onclick="openImage(event, 'Sports')">Sports</button>
                                <button class="tablinks" onclick="openImage(event, 'Tech')">Tech</button>
                                <button class="tablinks" onclick="openImage(event, 'Business')">Business</button>
                                <button class="tablinks" onclick="openImage(event, 'Auto')">Auto</button>
                            </div>

                            <div class="relative -mx-4 lg:mx-0 -mt-10 lg:mt-0 tabcontent lg:h-[610px]" id="Trending">
                                <img class="w-full h-full lg:p-5 pb-0 " src="{{ asset('storage/rocket.png') }}" alt="">
                                <div
                                    class="absolute flex left-4 lg:left-14 bottom-6 lg:bottom-16 text-lg lg:text-4xl">

                                    <div
                                        class="mt-3 lg:mt-4  text-slate-100 h-8 w-8 lg:w-14 lg:h-14  border-2 rounded-full border-white">
                                        <i class="fa-solid fa-play text-center lg:ml-4 lg:mt-2 ml-2"></i>
                                    </div>
                                    <div class="ml-4 lg:ml-6 font-serif font-semibold text-slate-100">

                                        Isro launches 104 satellites in a single <br> mission to create world record
                                    </div>
                                </div>
                                <div
                                    class="text-sm lg:text-xl absolute ml-16 lg:ml-36 text-slate-100 bottom-1 lg:bottom-6">
                                    2:30 | By Telegraph
                                </div>

                            </div>
                            <div class="relative -mx-4 lg:mx-0 -mt-10 lg:mt-0 tabcontent hidden lg:h-[610px]" id="News">
                                <img class="w-full h-full lg:p-5 pb-0 " src="{{ asset('storage/giaosu.png') }}" alt="">
                                <div
                                    class="absolute flex left-4 lg:left-14 bottom-6 lg:bottom-16 text-lg lg:text-4xl">

                                    <div
                                        class="mt-3 lg:mt-4  text-slate-100 h-8 w-8 lg:w-14 lg:h-14  border-2 rounded-full border-white">
                                        <i class="fa-solid fa-play text-center lg:ml-4 lg:mt-2 ml-2"></i>
                                    </div>
                                    <div class="ml-4 lg:ml-6 font-serif font-semibold text-slate-100">

                                        Isro launches 104 satellites in a single <br> mission to create world record
                                    </div>
                                </div>
                                <div
                                    class="text-sm lg:text-xl absolute ml-16 lg:ml-36 text-slate-100 bottom-1 lg:bottom-6">
                                    2:30 | By Telegraph
                                </div>

                            </div>
                            <div class="relative -mx-4 lg:mx-0 -mt-10 lg:mt-0 tabcontent hidden lg:h-[610px]"
                                 id="Entertaiments">
                                <img class="w-full h-full lg:p-5 pb-0 " src="{{ asset('storage/rocket.png') }}" alt="">
                                <div
                                    class="absolute flex left-4 lg:left-14 bottom-6 lg:bottom-16 text-lg lg:text-4xl">

                                    <div
                                        class="mt-3 lg:mt-4  text-slate-100 h-8 w-8 lg:w-14 lg:h-14  border-2 rounded-full border-white">
                                        <i class="fa-solid fa-play text-center lg:ml-4 lg:mt-2 ml-2"></i>
                                    </div>
                                    <div class="ml-4 lg:ml-6 font-serif font-semibold text-slate-100">

                                        Isro launches 104 satellites in a single <br> mission to create world record
                                    </div>
                                </div>
                                <div
                                    class="text-sm lg:text-xl absolute ml-16 lg:ml-36 text-slate-100 bottom-1 lg:bottom-6">
                                    2:30 | By Telegraph
                                </div>

                            </div>

                        </div>
                        <div class="col-span-1 mt-6 overflow-auto h-[39rem] hidden lg:block">
                            <div class="relative">
                                <img class="w-full h-48 brightness-50" src="{{ asset('storage/tongthong.png') }}"
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
                            <div class="relative mt-4">
                                <img class="w-full h-48 brightness-50" src="{{ asset('storage/tongthong.png') }}"
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
                            <div class="relative mt-4">
                                <img class="w-full h-48 brightness-50" src="{{ asset('storage/giaosu.png') }}" alt="">
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
                                <img class="w-full h-48 brightness-50" src="{{ asset('storage/tongthong.png') }}"
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
                    </div>
                    <div class="lg:grid grid-cols-5 gap-8 mt-4">
                        <div class="mt-4 lg:mt-0 border-b-2 border-gray-200 lg:border-none pb-4 lg:pb-0">
                            <img src="{{ asset('storage/sadgirl.png') }}" class="hidden lg:block" alt="">
                            <div class="text-xl font-serif font-semibold lg:mt-3">
                                The Intimate Lens of Ed van der Elsken
                            </div>
                            <div class="flex justify-between">
                                <div class="text-base lg:text-lg text-slate-700 mr-5 lg:mr-0 lg:mt-2">
                                    Two European museums are presenting retrospectives of a man many consider to be
                                    one
                                    of
                                    the best street photographers of the 20th century.
                                </div>
                                <div>
                                    <img src="{{ asset('storage/sadgirl.png') }}" class="lg:hidden w-96 h-full" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 lg:mt-0 border-b-2 border-gray-200 lg:border-none pb-4 lg:pb-0">
                            <img src="{{ asset('storage/picture.png') }}" class="hidden lg:block" alt="">
                            <div class="text-xl font-serif font-semibold lg:mt-3">
                                The Intimate Lens of Ed van der Elsken
                            </div>
                            <div class="flex justify-between">
                                <div class="text-base lg:text-lg text-slate-700 mr-5 lg:mr-0 lg:mt-2">
                                    Two European museums are presenting retrospectives of a man many consider to be
                                    one
                                    of
                                    the best street photographers of the 20th century.
                                </div>
                                <div>
                                    <img src="{{ asset('storage/picture.png') }}" class="lg:hidden w-96 h-full" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 lg:mt-0 hidden lg:block">
                            <img src="{{ asset('storage/cake.png') }}" class="hidden lg:block" alt="">
                            <div class="text-xl font-serif font-semibold lg:mt-3">
                                The Intimate Lens of Ed van der Elsken
                            </div>
                            <div class="flex justify-between">
                                <div class="text-sm lg:text-lg text-slate-700 mr-5 lg:mr-0 lg:mt-2">
                                    Two European museums are presenting retrospectives of a man many consider to be
                                    one
                                    of
                                    the best street photographers of the 20th century.
                                </div>
                                <div>
                                    <img src="{{ asset('storage/cake.png') }}" class="lg:hidden w-96 h-full" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 lg:mt-0 hidden lg:block">
                            <img src="{{ asset('storage/img_13.png') }}" class="hidden lg:block" alt="">
                            <div class="text-xl font-serif font-semibold lg:mt-3">
                                The Intimate Lens of Ed van der Elsken
                            </div>
                            <div class="flex justify-between">
                                <div class="text-sm lg:text-lg text-slate-700 mr-5 lg:mr-0 lg:mt-2">
                                    Two European museums are presenting retrospectives of a man many consider to be
                                    one
                                    of
                                    the best street photographers of the 20th century.
                                </div>
                                <div>
                                    <img src="{{ asset('storage/img_13.png') }}" class="lg:hidden w-96 h-full" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 lg:mt-0 hidden lg:block">
                            <img src="{{ asset('storage/two-fish.png') }}" class="hidden lg:block" alt="">
                            <div class="text-xl font-serif font-semibold mt-3">
                                The Intimate Lens of Ed van der Elsken
                            </div>
                            <div class="flex justify-between">
                                <div class="text-sm lg:text-lg text-slate-700 mr-5 lg:mr-0">
                                    Two European museums are presenting retrospectives of a man many consider to be
                                    one
                                    of
                                    the best street photographers of the 20th century.
                                </div>
                                <div>
                                    <img src="{{ asset('storage/two-fish.png') }}" class="lg:hidden w-96 h-full" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block col-span-1">
                <p class="bg-[#fbff22] p-1 inline-block text-xl font-semibold text-gray-700">MOST POPULAR</p>

                <div class="">
                    <div class=" relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">1</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                    <div class="border-2 border-dotted border-gray-200 w-1/3"></div>
                    <div class=" relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">2</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                    <div class="border-2 border-dotted  border-gray-200 w-1/3"></div>
                    <div class=" relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">3</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                    <div class="border-2 border-dotted  border-gray-200 w-1/3"></div>
                    <div class=" relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">4</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                    <div class="border-2 border-dotted  border-gray-200 w-1/3"></div>
                    <div class=" relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">5</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                    <div class="border-2 border-dotted  border-gray-200 w-1/3"></div>
                    <div class=" relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">6</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                    <div class="border-2 border-dotted  border-gray-200 w-1/3"></div>
                    <div class=" relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">7</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                    <div class="border-2 border-dotted  border-gray-200 w-1/3"></div>
                    <div class=" relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">8</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                    <div class="border-2 border-dotted  border-gray-200 w-1/3"></div>
                    <div class=" relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">9</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                    <div class="border-2 border-dotted  border-gray-200 w-1/3"></div>
                    <div class="  relative">
                        <div class="text-gray-200 text-8xl pb-3 font-bold">10</div>

                        <a class="top-3 left-6 absolute text-lg" href="#">5 buyout candidates the Celtics could
                            target after quiet trade deadline</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{--@push('scripts')--}}
{{--    <script>--}}
{{--        /* When the user clicks on the button,--}}
{{--        toggle between hiding and showing the dropdown content */--}}
{{--        function myFunction() {--}}

{{--            // var menu = document.getElementsByClassName("dropdown-content");--}}
{{--            var menu = document.getElementById('myDropdown');--}}

{{--            if (menu.classList.contains('hidden')) {--}}
{{--                menu.classList.remove('hidden');--}}
{{--            } else {--}}
{{--                menu.classList.add('hidden');--}}
{{--            }--}}
{{--            // alert("hehe");--}}
{{--        }--}}

{{--        function openImage(evt, cityName) {--}}
{{--            var i, tabcontent, tablinks;--}}
{{--            tabcontent = document.getElementsByClassName("tabcontent");--}}
{{--            for (i = 0; i < tabcontent.length; i++) {--}}
{{--                tabcontent[i].style.display = "none";--}}
{{--            }--}}
{{--            tablinks = document.getElementsByClassName("tablinks");--}}
{{--            for (i = 0; i < tablinks.length; i++) {--}}
{{--                tablinks[i].className = tablinks[i].className.replace(" text-blue-600", "");--}}
{{--            }--}}
{{--            document.getElementById(cityName).style.display = "block";--}}
{{--            evt.currentTarget.className += " text-blue-600";--}}
{{--        }--}}

{{--    </script>--}}

{{--@endpush--}}

