<div class="header py-4 lg:py-0">
    <div class=" flex justify-between lg:border-b-2 border-dashed lg:border-slate-200 pb-1 ">
        <div class="flex items-center relative text-2xl lg:text-lg text-gray-300 lg:text-black">
            <i class="fa-solid fa-bars dropbtn " onclick="myFunction()"></i>
            <div class="ml-2 hidden lg:block">SECTIONS</div>
            <div id="myDropdown" class="dropdown-content absolute hidden overflow-auto z-10 top-10">
                <a href="#home"
                   class="block bg-gray-300 px-8 py-4 border-b-2 border-red-100 h-16 min-h-full w-64 min-w-full">Home
                    fsdgdsf gdsgdsgsd</a>
                <a href="#home"
                   class="block bg-gray-300 px-8 py-4 border-b-2 border-red-100 h-16 min-h-full w-64 min-w-full">Home
                    fsdgdsf gdsgdsgsd</a>
                <a href="#home"
                   class="block bg-gray-300 px-8 py-4 border-b-2 border-red-100 h-16 min-h-full w-64 min-w-full">Home
                    fsdgdsf gdsgdsgsd</a>
                <a href="#home"
                   class="block bg-gray-300 px-8 py-4 border-b-2 border-red-100 h-16 min-h-full w-64 min-w-full">Home
                    fsdgdsf gdsgdsgsd</a>

            </div>
        </div>
        <div class="text-gray-700 lg:mt-1 leading-8 hidden lg:block ml-16">Friday, February 24, 2017</div>
        <a href="{{ route('home') }}" class="font-black text-4xl text-center lg:hidden font-bitter">The News</a>

        <div class="flex justify-between text-2xl lg:text-lg ">
            <div class="flex items-center lg:mr-4 text-gray-300 lg:text-black">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>

                <!-- <div class="ml-2 hidden lg:block">SEARCH</div> -->
                <input class="hidden lg:block border-none w-32 font-black ml-2" type="text"
                       placeholder="SEARCH">
            </div>
            @if( auth()->check() )
                <a href="#" class="rounded bg-gray-300 lg:py-2 lg:px-8">Xin chao {{ auth()->user()->name }}</a>
                <a href="#" class="rounded bg-gray-300 lg:py-2 lg:px-8 hidden ">Login</a>
                <a href="{{ route('log_out') }}" class="rounded bg-gray-300 lg:py-2 lg:px-8 lg:ml-4">Logout</a>
            @else
                <a href="{{ route('sign_in') }}" class="rounded bg-gray-300 lg:py-2 lg:px-8 hidden lg:block ">Login</a>
            @endif
        </div>
    </div>

    <div class="font-black text-8xl text-center font-bitter mt-8 border-b-2 border-slate-200 pb-9 hidden lg:block">
        <a href="{{ route('home') }}">The News</a></div>
</div>
