@extends("layouts.app")

@section("title", "Syllabus")

@section('content')
<div class="py-6 px-10">
    <x-title-card>
        <article class="w-4/5">
            <div class="my-7 ml-3 mr-6 w-full">
                <h3 class="text-2xl w-full lg:w-3/4 font-black text-white sm:text-3xl overflow-hidden line-clamp-2">
                Boost your conversion rate Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
                </h3>
                <p class="mt-3 text-xs/5 w-full lg:w-11/12 text-white sm:text-sm/6 xl:text-base h-[6.5rem] sm:h-24 overflow-hidden line-clamp-5 sm:line-clamp-4">Brief description of the syllabus, what to the user expect to learn, what they will do, and so on. Make it a bit more longer to make sure  a long paragraph would fit perfectly to the design. Please don’t read these, it’s for eliminating white spaces. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem illo magni animi nisi accusamus aut quam expedita ut dolorem, itaque, corporis rerum dolores tempore quasi excepturi maiores minus. Nihil veritatis sed provident a, voluptatem, corrupti consequatur minus tempora dicta accusantium ullam cupiditate eligendi impedit reprehenderit asperiores laboriosam non magni ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, nobis id amet adipisci hic voluptates voluptate mollitia reiciendis fugiat, voluptas aspernatur eligendi quam. Non, modi nihil molestiae iure temporibus error perspiciatis id numquam? Corrupti ad veritatis nisi voluptates voluptatem harum, expedita, vitae quam, ipsam delectus architecto explicabo. Perferendis, eum. Quia!</p>
            </div>
        </article>
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
    <div class="text-white mt-7">
        <h1 class="font-bold text-lg md:text-xl mb-3">About this syllabus</h1>
        <ul class="list-disc ml-6 text-sm md:text-base">
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, a!</li>
            <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque quam dolorum fuga amet? Dolorem, perferendis?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, reiciendis! Molestiae, eaque?</li>
        </ul>
    </div>
    <div class="text-white mt-12">
        <h1 class="font-bold text-lg md:text-xl mb-8">Courses</h1>
        @for ($i = 0; $i < 5; $i++)
            <div class="flex {{$i % 2 == 0 ? 'justify-start' : 'justify-end'}} mb-12">
                <form action="#save" method="POST" class="course w-[50%] p-1 rounded-[8px] border border-white group/titles">
                    <div class="course-header bg-[#CD7C42] h-22 px-8 py-6 rounded-[4px] text-center transition-colors duration-200">
                        <h3 class="text-sm sm:text-base lg:text-xl font-semibold w-full truncate">({{$i+1}})&emsp;Course Title {{$i+1}} Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quisquam dicta maiores assumenda dolor quod ipsam iure officia, modi ab doloribus at tempora aliquid reiciendis fugiat repellendus deserunt quia eligendi?</h3>
                    </div>
                    <div class="course-detail w-full flex-col my-4 hidden group-hover/titles:flex">
                        @for ($j = 0; $j < 5; $j++)
                            <div class="w-full flex gap-10 px-4 sm:px-8 md:px-12 lg:px-24 justify-between my-[0.35rem]">
                                <label for="c{{$i}}m{{$j}}" class="w-full flex items-center gap-10 cursor-pointer">
                                    <div class="flex w-full gap-2 sm:gap-5 lg:gap-8 2xl:gap-16 group/details">
                                        {{-- not checked checkbox --}}
                                        <input type="checkbox" name="course-{{$i}} module-{{$j}}" id="c{{$i}}m{{$j}}" class="hidden peer">
                                        {{-- checked checkbox --}}
                                        {{-- <input type="checkbox" checked name="course-{{$i}} module-{{$j}}" id="c{{$i}}m{{$j}}" class="hidden peer"> --}}
                                        <div class="truncate text-lg transition-colors duration-200 peer-checked:text-[#666] group-hover/details:text-[#a9a9a9]">
                                            {{$j+1}}.&ensp;Module {{$j+1}} Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt mollitia animi repudiandae ipsum suscipit! Asperiores, nisi beatae. Delectus iste eligendi placeat nisi quasi explicabo quibusdam tenetur vitae ad harum? Optio.
                                        </div>
                                        <span class="w-52 md:w-40 xl:w-24 2xl:w-20 h-6 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-sm transition-colors duration-200 peer-checked:hidden relative"></span>
                                        <span class="w-52 md:w-40 xl:w-24 2xl:w-20 h-6 border-2 border-[#666] hidden items-center justify-center rounded-sm pb-[0.1rem] transition-colors duration-200 peer-checked:flex relative">
                                            <span class="absolute w-1.5 h-3 border-[#666] border-r-2 border-b-2 transform rotate-45"></span>
                                        </span>
                                    </div>
                                </label>
                            </div>
                        @endfor
                        <button type="submit" class="mt-5 mb-1 w-1/5 h-9 pb-[0.15rem] self-center rounded-[8px] border-2 border-white hover:border-[#a9a9a9] hover:text-[#a9a9a9] font-semibold">Save</button>
                    </div>
                </form>
            </div>
        @endfor
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
