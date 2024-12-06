@extends("layouts.app")

@section("title", "Home")

@section('content')
<div class="py-6 px-10">
    <x-title-card>
        <div class="text-white w-8/12 my-3 ml-3">
            <h1 class="text-xl md:text-2xl/9 lg:text-3xl/10 font-bold mb-4">My Learning</h1>
            <div class="flex items-center w-11/12 gap-3 my-2 h-4">
                @include('components.progress-bar', ['percentage' => 38])
            </div>
            <div class="border border-white rounded-[8px] mt-4 mb-1 w-11/12 p-3 flex items-end justify-between">
                <div class="w-3/4">
                    <p class="">Course</p>
                    <h1 class="text-lg/5 sm:text-xl lg:text-2xl/10 font-semibold my-2 w-full truncate">Pre Security Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, magni?</h1>
                    <p class="text-[0.65rem] w-full overflow-hidden line-clamp-2">Current Module: Intro to Defensive Security Lorem ipsum dolor sit amet consectetur adipisicing elit. A, mollitia!</p>
                </div>
                <a href="#course-presec" class="flex items-end text-xs lg:text-sm font-medium border border-white px-4 py-1 rounded-[16px] hover:border-[#a9a9a9] hover:text-[#a9a9a9]"><p class="hidden lg:block">Resume &nbsp;</p><img src="ArrowRight.svg" class="w-4 lg:w-5"></a>
            </div>
            <a href="#profile" class="text-xs text-[#84C8FF] font-medium">View path in progress&ensp;></a>
        </div>
        <x-details>
            <div class="text-white flex flex-col gap-7 w-full">
                <div class="flex justify-between items-center w-full">
                    <h1 class="text-sm lg:text-base xl:text-lg font-semibold">Your Stats</h1>
                    <a href="#profile" class="font-medium border border-white hidden lg:block px-2 xl:px-3 py-1 text-xs lg:text-sm xl:text-base rounded-[16px] hover:bg-white hover:text-black">Go to profile</a>
                    <a href="#profile" class="font-medium border border-white block lg:hidden px-2 py-1 rounded-[16px] hover:bg-white"><img src="User.svg" alt="Profile" class="w-5 hover:invert"></a>
                </div>
                <div class="flex items-center gap-1 lg:gap-2">
                    <img src="UserCircle.svg" class="w-8 lg:w-[3.25rem]">
                    <p class="text-sm lg:text-base w-full truncate">Username Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, recusandae nisi? Harum laboriosam nostrum minima voluptas reiciendis ut nemo, sequi aperiam consectetur ducimus? Dolor at molestias earum, suscipit maxime quisquam?</p>
                </div>
                <div class="flex justify-center gap-x-5 gap-y-2 lg:justify-between w-full flex-wrap">
                    <div class="flex gap-1 w-[25%] justify-center items-center">
                        <img src="completed.svg" alt="Done" class="w-6 lg:w-8">
                        <p class="text-xs md:text-base">3</p>
                    </div>
                    <div class="flex gap-1 w-[25%] justify-center items-center">
                        <img src="ongoing.svg" alt="Ongoing" class="w-6 lg:w-8">
                        <p class="text-xs md:text-base">8</p>
                    </div>
                    <div class="flex gap-1 w-[25%] justify-center items-center">
                        <img src="saved.svg" alt="Saved" class="w-6 lg:w-8">
                        <p class="text-xs md:text-base">12</p>
                    </div>
                </div>
            </div>
        </x-details>
    </x-title-card>
    <div class="text-white mt-12">
        <h1 class="font-bold text-lg md:text-xl mb-3">Recommended for you</h1>
    </div>
</div>
@endsection
