@extends("layouts.app")

@section("title", "Path in Progress")

@section('content')
    <div class="py-6 px-10">
        <x-title-card>
            <div class="text-white w-full sm:w-8/12 my-3 ml-3">
                <h1 class="text-xl md:text-2xl/9 lg:text-3xl/10 font-bold my-3">{{$course->title}}</h1>
                <p class="mt-3 text-xs/5 w-full lg:w-11/12 text-white sm:text-sm/6 xl:text-base overflow-hidden line-clamp-2">{{$course->description}}</p>
                <h1 class="text-lg md:text-xl/9 lg:text-2xl/10 font-semibold my-4">Course Progress</h1>
                <div class="flex items-center w-11/12 gap-3 my-2 h-4">
                    @include('components.progress-bar', ['percentage' => 38])
                </div>
            </div>
            <div class="w-4/12 mb-8 mt-4 mr-4">
                <x-details>
                    <div class="h-5/6">
                        <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="{{ asset('CellSignalLow.svg')}}" class="w-6 sm:w-7">{{$course->difficulty}}</p>
                        <hr class="my-1">
                        <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="{{ asset('Clock.svg')}}" class="w-6 sm:w-7">{{$course->duration}}</p>
                        <hr class="my-1">
                        <?php
                            $count = 0;
                            foreach($course->module as $module){
                                $count++;
                            }
                        ?>
                        <p class="text-white text-xs sm:text-sm md:text-md lg:text-lg flex items-center gap-1 overflow-hidden"><img src="{{ asset('BookBookmark.svg')}}" class="w-6 sm:w-7">{{$count}} lessons</p>
                        <hr class="my-1">
                        <div class="flex gap-4 mt-[15%] md:mt-[8%]">
                            {{-- PAKE YG DI-COMMENT (BE) --}}
                            {{-- <button class="{{$bookmarked ? 'bg-white text-black' : 'border-[#2c2c2c] border-2 text-white'}} rounded px-2 py-1 flex items-center gap-1 text-xs sm:text-sm md:text-md lg:text-lg"><img src="BookmarkSimple.svg" class="{{$bookmarked ? 'invert' : 'invert-0'}}"><p class="hidden md:block">Save</p></button>
                            <button class="{{$liked ? 'bg-white text-black' : 'border-[#2c2c2c] border-2 text-white'}} rounded p-2 flex items-center gap-1  text-xs sm:text-sm md:text-md lg:text-lg"><img src="ThumbsUp.svg" class="{{$liked ? 'invert' : 'invert-0'}}"><p class="hidden md:block">{{$likes}}</p></button> --}}

                            <button class="border-[#2c2c2c] border-2 text-white rounded px-2 py-1 flex items-center gap-1 text-xs sm:text-sm md:text-md lg:text-lg"><img src="{{ asset('BookBookmark.svg')}}" class="invert-0"><p class="hidden md:block">Save</p></button>
                            <button class="bg-white text-black rounded p-2 flex items-center gap-1  text-xs sm:text-sm md:text-md lg:text-lg"><img src="{{ asset('ThumbsUp.svg')}}" class="invert"><p class="hidden md:block">256</p></button>
                        </div>
                    </div>
                </x-details>
            </div>
        </x-title-card>
        <div class="mt-12 mb-3">
            <form action="/" method="POST" class="w-full">
                <div class="w-full my-5 flex mb-7 items-center gap-10">
                    <h1 class="text-white text-xl font-semibold">Module</h1>
                    <button type="submit" class="w-[20%] font-medium py-2 text-white border-white border rounded-3xl text-sm hover:bg-white hover:text-black">Save Progress</button>
                </div>
                <div class="rounded-[12px] border border-white py-12 px-16 flex flex-col gap-12">
                    <?php $i = 0;?>
                    @foreach ($course->module as $module)
                    <div>
                        <div class="text-white flex justify-between">
                            <label for="module-{{$i}}" class="w-full flex items-center gap-10 cursor-pointer my-1">
                                <div class="flex w-full gap-10 group/details items-center">
                                    <input type="checkbox" name="module-{{$i}}" id="module-{{$i}}" value="module-{{$i}}" class="module hidden peer">
                                    <span class="w-6 h-6 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-sm transition-colors duration-200 peer-checked:hidden"></span>
                                    <span class="w-6 h-6 border-2 bg-white hidden items-center justify-center rounded-sm pb-[0.1rem] transition-colors duration-200 peer-checked:flex">
                                        <span class="absolute w-1.5 h-3 border-black border-r-2 border-b-2 transform rotate-45"></span>
                                    </span>
                                    <div class="truncate text-lg w-[54rem] transition-colors duration-200 group-hover/details:text-[#a9a9a9] font-semibold">
                                            {{$module->title}}
                                    </div>
                                </div>
                            </label>
                            <button type="button" class="expand rotate-180" onclick="expandCollapse(event)"><img src="{{ asset('CaretUp.svg')}}" alt=""></button>
                        </div>
                        <hr class="separator ml-16 my-2 hidden">
                        <div class="expand-details text-white ml-[4.1rem] my-3 hidden">
                            <p>{{$module->description}}</p>
                            <p class="my-2">Link:&ensp;<a href="{{$module->link_content}}" class="text-[#84C8FF] font-medium">{{$module->link_content}}</a></p>
                        </div>
                    </div>
                    <?php $i++;?>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
    <script>
        expandBtn = document.getElementsByClassName('expand')
        separator = document.getElementsByClassName('separator')
        expandDetails = document.getElementsByClassName('expand-details')

        for (let index = 0; index < expandBtn.length; index++) {
            expandBtn[index].addEventListener('click', function (){
                if (expandBtn[index].classList.contains('rotate-180')) {
                    expandBtn[index].classList.remove('rotate-180')
                    separator[index].classList.remove('hidden')
                    expandDetails[index].classList.remove('hidden')
                }
                else{
                    expandBtn[index].classList.add('rotate-180')
                    if (!separator[index].classList.contains('hidden')) {
                        separator[index].classList.add('hidden')
                    }
                    if (!expandDetails[index].classList.contains('hidden')) {
                        expandDetails[index].classList.add('hidden')
                    }
                }
            })
        }
    </script>
@endsection
