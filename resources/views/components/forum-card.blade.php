<a href="{{$link}}" class="forum-card w-80 h-52">
    <div class="p-4 border border-white rounded-[8px] w-full h-full overflow-hidden">
        <div class="flex gap-2 items-start overflow-hidden">
            <img src="{{asset('UserCircle.svg')}}" class="w-12">
            <div>
                <div class="flex gap-2 text-lg w-full">
                    <h3 class="font-medium max-w-32 truncate">{{$username}}</h3>
                    <h3 class="text-[#666666]">•</h3>
                    <h3 class="text-[#666666]">{{$timestamp}}</h3>
                </div>
                <p class="line-clamp-4 text-base">{{$content}}</p>
            </div>
        </div>
        <div class="flex justify-evenly mt-4 gap-10 px-2">
            <div class="flex items-center gap-1">
                <img src="{{asset('ChatCircle.svg')}}" alt="Comment" class="w-8 invert">
                <p class="text-[#999999] text-base">{{$comments > 999999 ? (int)($comments/1000000).'M' : ($comments > 999 ? (int)($comments/1000).'K' : $comments)}}</p>
            </div>
            <div class="flex items-center gap-1">
                <img src="{{asset('Prohibit.svg')}}" alt="Report" class="w-8 invert">
            </div>
        </div>
    </div>
</a>
