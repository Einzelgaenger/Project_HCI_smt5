<div class="bg-black my-8 ml-8 w-2/5 h-4/5 rounded p-5 lg:w-1/4">
    <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="CellSignalLow.svg" class="w-6 sm:w-7">{{$difficulty}}</p>
    <hr class="my-1">
    <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="Clock.svg" class="w-6 sm:w-7">{{$duration}} hours</p>
    <hr class="my-1">
    <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="BookBookmark.svg" class="w-6 sm:w-7">{{$lessons}} lessons</p>
    <hr class="my-1">
    <div class="flex gap-2 mt-[5%]">
        <button class="{{$bookmarked ? 'bg-white text-black' : 'border-[#2c2c2c] border-2 text-white'}} rounded px-2 py-1 flex items-center gap-1 text-xs sm:text-sm md:text-md lg:text-lg"><img src="BookmarkSimple.svg" class="{{$bookmarked ? 'invert' : 'invert-0'}}"><p class="hidden sm:block">Save</p></button>
        <button class="{{$liked ? 'bg-white text-black' : 'border-[#2c2c2c] border-2 text-white'}} rounded p-2 flex items-center gap-1  text-xs sm:text-sm md:text-md lg:text-lg"><img src="ThumbsUp.svg" class="{{$liked ? 'invert' : 'invert-0'}}"><p class="hidden sm:block">{{$likes}}</p></button>
    </div>
</div>
