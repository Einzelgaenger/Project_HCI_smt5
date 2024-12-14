@extends("layouts.app")

@section("title", "Course")

@section('content')
<div class="p-6">
    <x-title-card>
        <article class="w-4/5">
            <div class="my-7 ml-3 mr-6 w-full h-full">
                <h3 class="text-2xl w-full lg:w-3/4 font-black text-white sm:text-3xl overflow-hidden line-clamp-2">
                {{$course->title}}
                </h3>
                <p class="mt-3 mb-5 text-xs/5 w-full lg:w-11/12 text-white sm:text-sm/6 xl:text-base max-h-[6.5rem] sm:max-h-24 overflow-hidden line-clamp-5 sm:line-clamp-4">{{$course->description}}</p>
                <a href="{{route('syllabus', $course->syllabus_id)}}" class="text-white border-2 border-white rounded-[16px] px-4 py-1 font-medium hover:bg-white hover:text-black transition-all">View Syllabus</a>
            </div>
        </article><div class="w-4/12 mb-8 mt-4 mr-4">
            <x-details>
                <div class="h-5/6">
                    <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="{{$course->difficulty == 'Beginner Friendly' ? asset('CellSignalLow.svg') : ($course->difficulty == 'Intermediate' ? asset('CellSignalMedium.svg') : asset('CellSignalHigh.svg'))}}" class="w-6 sm:w-7">{{$course->difficulty}}</p>
                    <hr class="my-1">
                    <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="{{asset('Clock.svg')}}" class="w-6 sm:w-7">{{$course->duration}} hours</p>
                    <hr class="my-1">
                    <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="{{asset('BookBookmark.svg')}}" class="w-6 sm:w-7">{{$course->module->count()}} modules</p>
                    <hr class="my-1">
                    <div class="flex gap-4 mt-[15%] md:mt-[8%]">
                        <button class="border-[#2c2c2c] border-2 text-white rounded px-2 py-1 flex items-center gap-1 text-xs sm:text-sm md:text-md lg:text-lg"><img src="{{asset('BookmarkSimple.svg')}}" class="invert-0"><p class="hidden md:block">Save</p></button>
                        <button class="bg-white text-black rounded p-2 flex items-center gap-1  text-xs sm:text-sm md:text-md lg:text-lg"><img src="{{asset('ThumbsUp.svg')}}" class="invert"><p class="hidden md:block">256</p></button>
                    </div>
                </div>
            </x-details>
        </div>
    </x-title-card>
    <h1 class="text-white font-bold text-lg md:text-xl mb-5 mt-16 px-4">
        Module
    </h1>
    <div class="flex flex-col gap-10 items-center px-4">
        @foreach ($course->module as $module)
            @include('components.module-card', [
            'title' => $module->title,
            'description' => $module->description,
            'link' => $module->link_content,
            ])
        @endforeach
    </div>
</div>


@endsection
