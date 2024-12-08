@extends("layouts.app")

@section("title", "Path in Progress")

@section('content')
    <div class="py-6 px-10">
        <x-title-card>
            <div class="text-white w-full sm:w-8/12 my-3 ml-3">
                <h1 class="text-xl md:text-2xl/9 lg:text-3xl/10 font-bold my-3">Course Title</h1>
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
        <div class="my-12">
            <h1 class="text-white text-xl font-semibold mb-10">Module</h1>
            <form action="#" method="POST" class="w-full">
                <div class="rounded-[12px] border border-white py-12 px-16 flex flex-col gap-6">
                @for ($i = 0; $i < 6; $i++)
                    <div class="text-white flex justify-between">
                        <label for="module-{{$i}}" class="w-full flex items-center gap-10 cursor-pointer my-1">
                            <div class="flex w-full gap-8 group/details items-center">
                                <input type="checkbox" name="module-{{$i}}" id="module-{{$i}}" value="module-{{$i}}" class="module hidden peer">
                                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-sm transition-colors duration-200 peer-checked:hidden"></span>
                                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-sm pb-[0.1rem] transition-colors duration-200 peer-checked:flex">
                                    <span class="absolute w-1.5 h-3 border-black border-r-2 border-b-2 transform rotate-45"></span>
                                </span>
                                <div class="truncate text-lg w-[54rem] transition-colors duration-200 group-hover/details:text-[#a9a9a9] font-semibold">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus corrupti nostrum voluptates architecto placeat nemo animi itaque possimus nobis, harum, repellendus qui tenetur doloribus esse fuga eaque aliquid asperiores! Perspiciatis!
                                </div>
                            </div>
                        </label>
                        <button class="rotate-180"><img src="CaretUp.svg" alt=""></button>
                    </div>
                    <div>

                    </div>
                @endfor
                </div>
                <button type="submit" class="w-1/2 font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">Save</button>
            </form>
        </div>
    </div>

@endsection
