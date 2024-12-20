<a href="{{$link}}" class="card {{$type}} {{$difficulty}} {{($duration < 5 ? '5-less' : ($duration < 10 ? '5-10' : ($duration < 20 ? '10-20' : '20-more')))}} filtered-level filtered-type filtered-time text-white m-2 border-white border h-80 w-72 rounded-md">
    {{-- Syllabus --}}
    @if ($type == 'Syllabus')
        @if ($status == 'Completed')
            <div class="card-header bg-[#3B8C85] text-dark m-0.5 p-3 rounded-t-sm font-medium">
                Completed!
            </div>
        @elseif ($status == 'Ongoing')
            <div class="card-header bg-[#D9A441] text-dark m-0.5 p-3 rounded-t-sm font-medium">
                In progress...
            </div>
        @else
            <div class="card-header bg-[#705A8F] text-dark m-0.5 p-3 rounded-t-sm font-medium">
                Not Taken!
            </div>
        @endif

    @else
        @if ($status == 'Completed')
            <div class="card-header bg-[#2F6B4D] text-dark m-0.5 p-3 rounded-t-sm font-medium">
                Completed!
            </div>
        @elseif ($status == 'Ongoing')
            <div class="card-header bg-[#CD7C42] text-dark m-0.5 p-3 rounded-t-sm font-medium">
                In progress...
            </div>
        @else
            <div class="card-header bg-[#3A4A5E] text-dark m-0.5 p-3 rounded-t-sm font-medium">
                Not Taken!
            </div>
        @endif
    @endif

    <div class="card-body mx-2 my-4 px-3 h-[60%]">
        <h5 class="card-title text-xl font-bold my-2">{{$title}}</h5>
        <p class="card-text text-base line-clamp-6">{{$description}}</p>
    </div>
    <hr class="border-dotted m-2">
    <div class="card-footer px-4 flex justify-between items-center w-full">
        <div class="flex items-center gap-1">
            @if ($difficulty == 'Beginner Friendly')
                <img src="{{asset('CellSignalLow.svg')}}" class="w-6">
            @elseif ($difficulty == 'Intermediate')
                <img src="{{asset('CellSignalMedium.svg')}}" class="w-6">
            @else
            <img src="{{asset('CellSignalHigh.svg')}}" class="w-6">
            @endif
            <p class="font-medium">{{$difficulty}}</p>

        </div>
        <div class="flex gap-1">
            <p class="font-medium">{{$duration}}</p><p>Hours</p>
        </div>
    </div>
</a>
