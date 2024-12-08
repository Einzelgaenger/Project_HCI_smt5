@extends("layouts.app")

@section("title", "Syllabus")

@section('content')
<div class="py-6 px-10">
    <x-title-card>
        <article class="w-4/5">
            <div class="my-7 ml-3 mr-6 w-full">
                <h3 class="text-2xl w-full lg:w-3/4 font-black text-white sm:text-3xl overflow-hidden line-clamp-2">
                {{$syllabus->title}}
                </h3>
                <p class="mt-3 text-xs/5 w-full lg:w-11/12 text-white sm:text-sm/6 xl:text-base h-[6.5rem] sm:h-24 overflow-hidden line-clamp-5 sm:line-clamp-4">{{$syllabus->description}}</p>
            </div>
        </article>
        <div class="w-4/12 mb-8 mt-4 mr-4">
            <x-details>
                <div class="h-5/6">
                    <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="" class="w-6 sm:w-7"> {{$syllabus->difficulty}} </p>
                    <hr class="my-1">
                    <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="Clock.svg" class="w-6 sm:w-7"> {{ $syllabus->duration }} </p>
                    <hr class="my-1">
                    <?php
                        $count = 0;
                        foreach($syllabus->course as $course){
                            $count++;
                        }
                    ?>
                    <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="BookBookmark.svg" class="w-6 sm:w-7">{{$count}} lessons</p>
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
    <div class="text-white mt-7">
        <h1 class="font-bold text-lg md:text-xl mb-3">About this syllabus</h1>
        <ul class="list-disc ml-6 text-sm md:text-base">
            @foreach ($syllabus->course as $course)
                <li>{{$course->title}}</li>
            @endforeach
        </ul>
    </div>
    <div class="text-white mt-12">
        <h1 class="font-bold text-lg md:text-xl mb-8">Courses</h1>
        <?php $i = 0;?>
        @foreach ($syllabus->course as $course)
            <div class="flex {{$i % 2 == 0 ? 'justify-start' : 'justify-end'}} mb-12">
                <form action="{{route('storeProgressModule')}}" method="POST" class="course w-[50%] p-1 rounded-[8px] border border-white group/titles">
                    @csrf
                    <input type="hidden" value="{{$syllabus->id}}" name="syllabus_id">
                    <div class="course-header bg-[#CD7C42] h-22 px-8 py-6 rounded-[4px] text-center transition-colors duration-200">
                        <h3 class="text-sm sm:text-base lg:text-xl font-semibold w-full truncate">({{$i+1}})&ensp;{{$course->title}}</h3>
                    </div>
                    <div class="course-detail w-full flex-col my-4 hidden group-hover/titles:flex">
                        <?php $j = 0;?>
                        @foreach ($course->module as $item)
                            <div class="w-full flex gap-10 px-4 sm:px-8 md:px-12 lg:px-24 justify-between my-[0.35rem]">
                                <label for="c{{$i}}m{{$j}}" class="w-full flex items-center gap-10 cursor-pointer">
                                    <div class="flex w-full gap-2 sm:gap-5 lg:gap-8 2xl:gap-16 group/details">
                                        @if(in_array($item->id, array_column($done, 'id')))
                                        
                                            {{-- not checked checkbox --}}
                                            <input type="checkbox" name="module_id[]" id="c{{$i}}m{{$j}}" value="{{$item->id}}" class="hidden peer" checked>
                                            {{-- checked checkbox --}}
                                            {{-- <input type="checkbox" checked name="course-{{$i}} module-{{$j}}" id="c{{$i}}m{{$j}}" class="hidden peer"> --}}
                                        @else
                                             {{-- not checked checkbox --}}
                                             <input type="checkbox" name="module_id[]" id="c{{$i}}m{{$j}}" value="{{$item->id}}" class="hidden peer">
                                             {{-- checked checkbox --}}
                                             {{-- <input type="checkbox" checked name="course-{{$i}} module-{{$j}}" id="c{{$i}}m{{$j}}" class="hidden peer"> --}}
                                        @endif
                                           
                                        <div class="w-52 truncate text-lg transition-colors duration-200 peer-checked:text-[#666] group-hover/details:text-[#a9a9a9]">
                                            {{$j+1}}.&ensp; {{$item->title}}
                                        </div>
                                        <span class="w-6 h-6 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-sm transition-colors duration-200 peer-checked:hidden relative"></span>
                                        <span class="w-6 h-6 border-2 border-[#666] hidden items-center justify-center rounded-sm pb-[0.1rem] transition-colors duration-200 peer-checked:flex relative">
                                            <span class="absolute w-1.5 h-3 border-[#666] border-r-2 border-b-2 transform rotate-45"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <?php $j++;?>
                        @endforeach
                        <button type="submit" class="mt-5 mb-1 w-1/5 h-9 pb-[0.15rem] self-center rounded-[8px] border-2 border-white hover:border-[#a9a9a9] hover:text-[#a9a9a9] font-semibold">Save</button>
                    </div>
                </form>
            </div>
            <?php $i++;?>
        @endforeach
    </div>
</div>

<script>
    const courses = document.getElementsByClassName('course')
    Array.from(courses).forEach(course => {
        const modules = course.getElementsByTagName('input')
        const allChecked = Array.from(modules).every((module) => module.checked)
        courseHeader = course.getElementsByClassName('course-header')
        Array.from(courseHeader).forEach(header => {
            header.classList.add(allChecked ? 'bg-[#2F6B4D]' : 'bg-[#CD7C42]')
            header.classList.remove(allChecked ? 'bg-[#CD7C42]' : 'bg-[#2F6B4D]')
        })
    })
</script>

@endsection
