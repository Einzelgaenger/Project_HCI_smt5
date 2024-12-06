<a href="#forum-x" class="w-80 h-52">
    <div class="p-4 border border-white rounded-[8px] w-full h-full">
        <div class="flex gap-2 items-start">
            <img src="UserCircle.svg" class="w-12">
            <div>
                <div class="flex gap-2 text-lg w-full">
                    <h3 class="font-medium w-32 truncate">{{$username}}</h3>
                    <h3 class="text-[#666666]">&#9642;</h3>
                    <h3 class="text-[#666666]">{{$timestamp}}</h3>
                </div>
                <p class="line-clamp-4 text-base">{{$content}}</p>
            </div>
        </div>
        <div class="flex justify-evenly mt-4 gap-10 px-2">
            <div class="flex items-center gap-1">
                @if ($liked)
                    <img src="Heart.svg" alt="Like" class="w-8">
                    <p class="text-[#F9185C] text-base">{{$likes > 999999 ? (int)($likes/1000000).'M' : ($likes > 999 ? (int)($likes/1000).'K' : $likes)}}</p>
                @else
                    <img src="HeartE.svg" alt="Like" class="w-8">
                    <p class="text-[#666666] text-base">{{$likes > 999999 ? (int)($likes/1000000).'M' : ($likes > 999 ? (int)($likes/1000).'K' : $likes)}}</p>
                @endif
            </div>
            <div class="flex items-center gap-1">
                <img src="ChatCircle.svg" alt="Comment" class="w-8">
                <p class="text-[#666666] text-base">{{$comments > 999999 ? (int)($comments/1000000).'M' : ($comments > 999 ? (int)($comments/1000).'K' : $comments)}}</p>
            </div>
            <div class="flex items-center gap-1">
                <img src="Prohibit.svg" alt="Report" class="w-8">
            </div>
        </div>
    </div>
</a>
