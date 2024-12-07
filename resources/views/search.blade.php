@extends("layouts.app")

@section("title", "Learn")

@section('content')
<div class="flex text-white">
    <div class="h-screen w-1/4 sticky top-0 bg-[#0A0A0A] px-7">
        <div class="flex gap-2 font-semibold text-xl my-3">
            <img src="Funnel.svg">
            <h3>Filters</h3>
        </div>
        <div class="px-2">
            <h5 class="font-medium text-sm">Level</h5>
            <label for="beginner-friendly" class="w-full flex items-center gap-10 cursor-pointer my-1">
                <div class="flex w-full gap-3 group/details items-center">
                    <input type="checkbox" name="beginner-friendly" id="beginner-friendly" class="hidden peer">
                    <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-sm transition-colors duration-200 peer-checked:hidden"></span>
                    <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-sm pb-[0.1rem] transition-colors duration-200 peer-checked:flex">
                        <span class="absolute w-1.5 h-3 border-black border-r-2 border-b-2 transform rotate-45"></span>
                    </span>
                    <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                        Beginner Friendly
                    </div>
                </div>
            </label>
            <label for="intermediate" class="w-full flex items-center gap-10 cursor-pointer my-1">
                <div class="flex w-full gap-3 group/details items-center">
                    <input type="checkbox" name="intermediate" id="intermediate" class="hidden peer">
                    <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-sm transition-colors duration-200 peer-checked:hidden"></span>
                    <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-sm pb-[0.1rem] transition-colors duration-200 peer-checked:flex">
                        <span class="absolute w-1.5 h-3 border-black border-r-2 border-b-2 transform rotate-45"></span>
                    </span>
                    <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                        Intermediate
                    </div>
                </div>
            </label>
            <label for="advanced" class="w-full flex items-center gap-10 cursor-pointer my-1">
                <div class="flex w-full gap-3 group/details items-center">
                    <input type="checkbox" name="advanced" id="advanced" class="hidden peer">
                    <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-sm transition-colors duration-200 peer-checked:hidden"></span>
                    <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-sm pb-[0.1rem] transition-colors duration-200 peer-checked:flex">
                        <span class="absolute w-1.5 h-3 border-black border-r-2 border-b-2 transform rotate-45"></span>
                    </span>
                    <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                        Advanced
                    </div>
                </div>
            </label>
        </div>
        <hr class="w-full my-5">
        <div class="px-2">
            <h5 class="font-medium text-sm">Type</h5>
            <label for="syllabus" class="w-full flex items-center gap-10 cursor-pointer my-1">
                <div class="flex w-full gap-3 group/details items-center">
                    <input type="checkbox" name="syllabus" id="syllabus" class="hidden peer">
                    <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-sm transition-colors duration-200 peer-checked:hidden"></span>
                    <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-sm pb-[0.1rem] transition-colors duration-200 peer-checked:flex">
                        <span class="absolute w-1.5 h-3 border-black border-r-2 border-b-2 transform rotate-45"></span>
                    </span>
                    <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                        Syllabus
                    </div>
                </div>
            </label>
            <label for="course" class="w-full flex items-center gap-10 cursor-pointer my-1">
                <div class="flex w-full gap-3 group/details items-center">
                    <input type="checkbox" name="course" id="course" class="hidden peer">
                    <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-sm transition-colors duration-200 peer-checked:hidden"></span>
                    <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-sm pb-[0.1rem] transition-colors duration-200 peer-checked:flex">
                        <span class="absolute w-1.5 h-3 border-black border-r-2 border-b-2 transform rotate-45"></span>
                    </span>
                    <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                        Courses
                    </div>
                </div>
            </label>
        </div>
        <hr class="w-full my-5">
        <div class="px-2">
            <h5 class="font-medium text-sm">Average time to complete</h5>
            <label for="all" class="w-full flex items-center gap-3 cursor-pointer my-1">
                <input type="radio" checked name="time" id="all" value="all" class="hidden peer">
                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:hidden"></span>
                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:flex">
                    <span class="absolute w-2 h-2 rounded-2xl bg-black"></span>
                </span>
                <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                    All
                </div>
            </label>
            <label for="5-less" class="w-full flex items-center gap-3 cursor-pointer my-1">
                <input type="radio" name="time" id="5-less" value="5-less" class="hidden peer">
                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:hidden"></span>
                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:flex">
                    <span class="absolute w-2 h-2 rounded-2xl bg-black"></span>
                </span>
                <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                    Less than 5 hours
                </div>
            </label>
            <label for="5-10" class="w-full flex items-center gap-3 cursor-pointer my-1">
                <input type="radio" name="time" id="5-10" value="5-10" class="hidden peer">
                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:hidden"></span>
                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:flex">
                    <span class="absolute w-2 h-2 rounded-2xl bg-black"></span>
                </span>
                <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                    5 - 10 hours
                </div>
            </label>
            <label for="10-20" class="w-full flex items-center gap-3 cursor-pointer my-1">
                <input type="radio" name="time" id="10-20" value="10-20" class="hidden peer">
                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:hidden"></span>
                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:flex">
                    <span class="absolute w-2 h-2 rounded-2xl bg-black"></span>
                </span>
                <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                    10 - 20 hours
                </div>
            </label>
            <label for="20-more" class="w-full flex items-center gap-3 cursor-pointer my-1">
                <input type="radio" name="time" id="20-more" value="20-more" class="hidden peer">
                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:hidden"></span>
                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:flex">
                    <span class="absolute w-2 h-2 rounded-2xl bg-black"></span>
                </span>
                <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                    20+ hours
                </div>
            </label>
        </div>
    </div>
    <div class="bg-[#0A0A0A] w-full">
        <div class="rounded-[8px] bg-gradient-to-b from-[#2c2c2c] to-[#0a0a0a] text-white w-full">
            <div class="search p-8">
                <div class="flex items-baseline gap-3 mb-5">
                    <h1 class="text-2xl font-semibold">Search Results</h1>
                    <p class="text-sm">25 Results</p>
                </div>
                <div class="flex flex-wrap justify-between gap-y-10">
                    @for ($i = 0; $i < 25; $i++)
                    @include('components.syllabus-course-card', [
                        'type' => 'Course',
                        'status' => 'Completed',
                        'title' => 'Course Title',
                        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque voluptas maiores dolor! Doloremque, perspiciatis dolorum reprehenderit voluptates quisquam pariatur minima beatae facere ea eos, deserunt praesentium? Adipisci voluptate placeat soluta!',
                        'difficulty' => 'Advanced',
                        'duration' => 18,
                    ])
                    @endfor
                </div>
                <div class="search-pagination w-full flex justify-center mt-10"></div>
            </div>
        </div>
    </div>
</div>
@endsection
