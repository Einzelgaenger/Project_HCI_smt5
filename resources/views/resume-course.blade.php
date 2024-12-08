@extends("layouts.app")

@section("title", "Path in Progress")

@section('content')
    <div class="py-6 px-10">
        <x-title-card>
            <div class="text-white w-full sm:w-8/12 my-3 ml-3">
                <h1 class="text-xl md:text-2xl/9 lg:text-3xl/10 font-bold my-3">My Learning</h1>
                <p class="mt-3 text-xs/5 w-full lg:w-11/12 text-white sm:text-sm/6 xl:text-base overflow-hidden line-clamp-2">Brief description of the syllabus, what to the user expect to learn, what they will do, and so on. Make it a bit more longer to make sure  a long paragraph would fit perfectly to the design. Please don’t read these, it’s for eliminating white spaces. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem illo magni animi nisi accusamus aut quam expedita ut dolorem, itaque, corporis rerum dolores tempore quasi excepturi maiores minus. Nihil veritatis sed provident a, voluptatem, corrupti consequatur minus tempora dicta accusantium ullam cupiditate eligendi impedit reprehenderit asperiores laboriosam non magni ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, nobis id amet adipisci hic voluptates voluptate mollitia reiciendis fugiat, voluptas aspernatur eligendi quam. Non, modi nihil molestiae iure temporibus error perspiciatis id numquam? Corrupti ad veritatis nisi voluptates voluptatem harum, expedita, vitae quam, ipsam delectus architecto explicabo. Perferendis, eum. Quia!</p>
                <h1 class="text-lg md:text-xl/9 lg:text-2xl/10 font-semibold my-4">Course Progress</h1>
                <div class="flex items-center w-11/12 gap-3 my-2 h-4">
                    @include('components.progress-bar', ['percentage' => 38])
                </div>
            </div>
            <div class="w-4/12 mb-8 mt-4 mr-4">
                <x-details>
                    <div class="h-5/6">
                        <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="CellSignalLow.svg" class="w-6 sm:w-7">Beginner Friendly</p>
                        <hr class="my-1">
                        <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="Clock.svg" class="w-6 sm:w-7">4 hours</p>
                        <hr class="my-1">
                        <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="BookBookmark.svg" class="w-6 sm:w-7">12 lessons</p>
                        <hr class="my-1">
                        <div class="flex gap-4 mt-[15%] md:mt-[8%]">
                            {{-- PAKE YG DI-COMMENT (BE) --}}
                            {{-- <button class="{{$bookmarked ? 'bg-white text-black' : 'border-[#2c2c2c] border-2 text-white'}} rounded px-2 py-1 flex items-center gap-1 text-xs sm:text-sm md:text-md lg:text-lg"><img src="BookmarkSimple.svg" class="{{$bookmarked ? 'invert' : 'invert-0'}}"><p class="hidden md:block">Save</p></button>
                            <button class="{{$liked ? 'bg-white text-black' : 'border-[#2c2c2c] border-2 text-white'}} rounded p-2 flex items-center gap-1  text-xs sm:text-sm md:text-md lg:text-lg"><img src="ThumbsUp.svg" class="{{$liked ? 'invert' : 'invert-0'}}"><p class="hidden md:block">{{$likes}}</p></button> --}}

                            <button class="border-[#2c2c2c] border-2 text-white rounded px-2 py-1 flex items-center gap-1 text-xs sm:text-sm md:text-md lg:text-lg"><img src="BookmarkSimple.svg" class="invert-0"><p class="hidden md:block">Save</p></button>
                            <button class="bg-white text-black rounded p-2 flex items-center gap-1  text-xs sm:text-sm md:text-md lg:text-lg"><img src="ThumbsUp.svg" class="invert"><p class="hidden md:block">256</p></button>
                        </div>
                    </div>
                </x-details>
            </div>
        </x-title-card>

    </div>

@endsection
