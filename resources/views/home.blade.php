@extends("layouts.app")

@section("title", "Home")

@section('content')
<div class="py-6 px-10">
    <x-title-card>
        <div class="text-white w-full my-3">
            <h1 class="text-xl md:text-2xl/9 lg:text-3xl/10 font-bold mb-4">My Learning</h1>
            <div class="border border-white rounded-[8px] mt-4 mb-2 w-11/12 p-3 flex items-end justify-between">
                @if (is_null($ongoing))
                <div class="w-3/4">
                    <p class="">Course</p>
                    <h1 class="text-lg/5 sm:text-xl font-semibold my-2 w-full truncate">No course or syllabus in progress at the moment</h1>
                </div>
                @else
                <div class="w-3/4">
                    <p class="">Ongoing Course</p>
                    <h1 class="text-lg/5 sm:text-xl lg:text-2xl/10 font-semibold my-2 w-full truncate">{{$ongoing->toArray()[0]['course']['title']}}</h1>
                    <p class="text-xs w-full overflow-hidden line-clamp-2">{{$ongoing->toArray()[0]['course']['description']}}</p>
                </div>
                @endif
            </div>
            <a href="/path-ongoing" class="text-sm text-[#84C8FF] font-medium">View path in progress&ensp;></a>
        </div>
        <div class="w-4/12 2xl:w-3/12 mb-8 mt-4 mr-4 hidden sm:block">
            <x-details>
                <div class="text-white flex flex-col gap-6 w-full">
                    <div class="flex justify-between items-center w-full">
                        <h1 class="text-sm hidden md:block lg:text-base xl:text-lg font-semibold">Your Stats</h1>
                        <a href="/profile" class="font-medium border border-white md:hidden lg:block px-2 xl:px-3 py-1 text-xs lg:text-sm xl:text-base rounded-[16px] hover:bg-white hover:text-black">Go to profile</a>
                        <a href="/profile" class="font-medium border border-white hidden md:block lg:hidden px-2 py-1 rounded-[16px] hover:bg-white"><img src="User.svg" alt="Profile" class="w-5 hover:invert"></a>
                    </div>
                    <div class="flex items-center gap-1 lg:gap-2">
                        <img src="UserCircle.svg" class="w-8 lg:w-[3.25rem]">
                        <p class="text-sm lg:text-base w-full truncate">{{ $user->username }}</p>
                    </div>
                    <div class="flex justify-center gap-x-5 gap-y-2 lg:justify-between w-full flex-wrap">
                        <div class="flex gap-1 w-[25%] justify-center items-center">
                            <img src="completed.svg" alt="Done" class="w-6 lg:w-8">
                            <p class="text-xs md:text-base">{{$done->count()}}</p>
                        </div>
                        <div class="flex gap-1 w-[25%] justify-center items-center">
                            <img src="ongoing.svg" alt="Ongoing" class="w-6 lg:w-8">
                            <p class="text-xs md:text-base">{{$ongoing->count()}}</p>
                        </div>
                        <div class="flex gap-1 w-[25%] justify-center items-center">
                            <img src="saved.svg" alt="Saved" class="w-6 lg:w-8">
                            <p class="text-xs md:text-base">{{$savedCount}}</p>
                        </div>
                    </div>
                </div>
            </x-details>
        </div>
    </x-title-card>
    <div class="text-white mt-12 w-full">
        <h1 class="font-bold text-lg md:text-xl mb-5 w-full">Recommended for you</h1>
        <div class="flex flex-wrap justify-center gap-x-16 gap-y-12">
            {{-- @foreach ($ongoing->toArray() as $keys => $values)
                {{$keys}}=>
                @if (is_array($values))
                    @foreach ($values as $keys2 => $values2)
                        <br>{{$keys2}}->
                        @if (is_array($values2))
                            @foreach ($values2 as $keys3 => $values3)
                                <br>{{$keys3}}: {{$values3}}
                            @endforeach
                        @else
                            {{$values2}}<br>
                        @endif
                    @endforeach
                @else
                    {{$values}}<br>
                @endif
            @endforeach --}}

            @php $courseCount = 0; @endphp
            @foreach ($syllabi as $syllabus)
                @foreach ($syllabus->course as $course)
                    @if ($courseCount >= 10) @break @endif
                        @include('components.syllabus-course-card',[
                        'type' => 'Course',
                        'status' => in_array($course->id, array_column(array_column($ongoing->toArray(), 'course'), 'id')) ? 'Ongoing' : (in_array($course->title, array_column(array_column($done->toArray(), 'course'), 'title')) ? 'Completed' : 'None'),
                        'title' => $course->title,
                        'link' => route('course', $course->id),
                        'description' => $course->description,
                        'difficulty' => $course->difficulty,
                        'duration' => $course->duration,
                        ])
                    @php $courseCount++; @endphp
                @endforeach
            @endforeach

        </div>
        <div class="w-full flex justify-center mt-10">
            <button onclick="view()" class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </div>
    <div class="text-white my-12">
        <h1 class="font-bold text-lg md:text-xl mb-5">Forum</h1>
        <div class="flex justify-center gap-10 flex-wrap flex-row-reverse w-full">
            @foreach ($forums as $forum)
                @include('components.forum-card', [
                    'link' => route('forum.show', $forum->id),
                    'username' => $forum->user->name,
                    'timestamp' => $forum->created_at->translatedFormat('M j, Y'),
                    'content' => $forum->content,
                    'comments' => $forum->comment->count(),
                ])
            @endforeach
        </div>
</div>

<script>
    cards = document.getElementsByClassName('card')

    if (cards.length > 5) {
        for (let index = 5; index < cards.length; index++) {
            cards[index].classList.add('hidden')
        }
    } else {
        viewMore = document.getElementsByClassName('view-more')
        viewMore[viewMore.length-1].classList.add('hidden')
    }

    function view() {
        if (cards.length > 5) {
            viewMore = document.getElementsByClassName('view-more')
            for (let index = 5; index < cards.length; index++) {
                if (cards[index].classList.contains('hidden')) {
                    cards[index].classList.remove('hidden')
                    viewMore[viewMore.length-1].innerText = 'View less'
                }
                else{
                    cards[index].classList.add('hidden')
                    viewMore[viewMore.length-1].innerText = 'View more'
                }
            }
        }
    }

    forumCards = document.getElementsByClassName('forum-card')

    if(forumCards.length > 5) {
        count = 0
        temp = forumCards.length
        while(count < temp - 5){
            forumCards[0].parentNode.removeChild(forumCards[0])
            count++
        }
    }
</script>
@endsection
