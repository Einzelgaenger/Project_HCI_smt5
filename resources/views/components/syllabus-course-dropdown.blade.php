
    <div class="CourseTable bg-black text-white rounded-[8px] border border-white {{ $progress }} px-2 my-3">
        <div class="my-4 mx-6">
            <div class="flex justify-between py-2">
                <div class="my-4">
                    <h5 class="text-xl">{{ $type }}</h5>
                    <h5 class="text-2xl font-bold my-2">{{ $title }}</h5>
                </div>
                <div class="flex justify-end flex-row items-center">
                    <div class="progress-bar text-xl">{{ $progress }}%</div>
                    <button class="dropdown rotate-180">
                        <img src="{{asset('CaretUp.svg')}}" alt="" class="w-12 mx-3">
                    </button>
                </div>
            </div>
            <div class="detail">
                <div class="border-white border p-6 rounded-[8px]">
                    <div class="font-bold text-lg">
                        <h1 class="text-xl">{{$type == 'Course' ? 'Modules' : 'Courses'}}</h1>
                    </div>
                    <div class="py-2 px-4 flex flex-col">
                        @foreach ($details as $detail)
                        <div class="flex flex-row p-2">
                            <img src="{{asset('BookBookmark.svg')}}" alt="" class="px-4 py-1 w-14">
                            <p class="px-4 text-lg">{{ $detail }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex justify-end gap-6">
                    <button class="text-black font-bold text-sm rounded-3xl bg-blue-400 py-2 px-6 mx-6 my-6">View {{ $type }}</button>
                </div>
            </div>
        </div>
    </div>


