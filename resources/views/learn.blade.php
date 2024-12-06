@extends("layouts.app")

@section("title", "Search")

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
            <div class="syllabus p-8">
                <div class="flex items-baseline gap-3 mb-5">
                    <h1 class="text-2xl font-semibold">Featured Syllabus</h1>
                    <p class="text-sm">10 Results</p>
                </div>
                <div class="flex flex-wrap justify-between gap-y-10">
                    @for ($i = 0; $i < 10; $i++)
                    @include('components.syllabus-course-card', [
                        'type' => 'Syllabus',
                        'status' => 'Completed',
                        'title' => 'Syllabus Title',
                        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque voluptas maiores dolor! Doloremque, perspiciatis dolorum reprehenderit voluptates quisquam pariatur minima beatae facere ea eos, deserunt praesentium? Adipisci voluptate placeat soluta!',
                        'difficulty' => 'Advanced',
                        'duration' => 18,
                    ])
                    @endfor
                </div>
                <div class="w-full flex justify-center mt-10">
                    <button onclick="view()" class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
                </div>
            </div>
            <div class="course p-8">
                <div class="flex items-baseline gap-3 mb-5">
                    <h1 class="text-2xl font-semibold">Featured Courses</h1>
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
                <div class="course-pagination w-full flex justify-center mt-10"></div>
            </div>
        </div>
    </div>
</div>

<script>
    syllabus = document.getElementsByClassName('syllabus')
    syllabusCards = syllabus[syllabus.length-1].getElementsByClassName('card')
    if (syllabusCards.length > 6) {
        for (let index = 6; index < syllabusCards.length; index++) {
            syllabusCards[index].classList.add('hidden')
        }
    } else {
        viewMore = syllabus[syllabus.length-1].getElementsByClassName('view-more')
        viewMore[viewMore.length-1].classList.add('hidden')
    }

    function view() {
        if (syllabusCards.length > 6) {
            viewMore = syllabus[syllabus.length-1].getElementsByClassName('view-more')
            for (let index = 6; index < syllabusCards.length; index++) {
                if (syllabusCards[index].classList.contains('hidden')) {
                    syllabusCards[index].classList.remove('hidden')
                    viewMore[viewMore.length-1].innerText = 'View less'
                }
                else{
                    syllabusCards[index].classList.add('hidden')
                    viewMore[viewMore.length-1].innerText = 'View more'
                }
            }
        }
    }

    courses = document.getElementsByClassName('course')
    courseCard = courses[courses.length-1].getElementsByClassName('card')
    if (courseCard.length > 9) {
        coursePages = courses[courses.length-1].getElementsByClassName('course-pagination')
        coursePages = coursePages[coursePages.length-1]
        pages = Math.ceil(courseCard.length/9)
        for (let index = 0; index < pages; index++) {
            pagination = document.createElement('button')
            pagination.id = index
            pagination.classList.add("pagination", "font-medium", "py-2", "text-white", "rounded", "px-5", "hover:bg-white", "hover:text-black")
            if (index == 0) {
                pagination.classList.add("border-white", "border")
            }
            pagination.innerText = index+1
            pagination.addEventListener('click', function(){
                otherPagination = document.getElementsByClassName('pagination')
                for (let index2 = 0; index2 < otherPagination.length; index2++) {
                    otherPagination[index2].classList.remove("border-white", "border")
                }
                otherPagination[index].classList.add("border-white", "border")
                for (let index2 = 0; index2 < index*9; index2++) {
                    courseCard[index2].classList.add('hidden')
                }

                if (courseCard.length - index*9 <= 9) {
                    for (let index2 = index*9; index2 < courseCard.length; index2++) {
                        courseCard[index2].classList.remove('hidden')
                    }
                }
                else {
                    for (let index2 = index*9; index2 < (index+1)*9; index2++) {
                        courseCard[index2].classList.remove('hidden')
                    }
                    for (let index2 = (index+1)*9; index2 < courseCard.length; index2++) {
                        courseCard[index2].classList.add('hidden')
                    }
                }
            })

            coursePages.appendChild(pagination)
        }
        for (let index = 9; index < courseCard.length; index++) {
            courseCard[index].classList.add('hidden')
        }
    }

</script>
@endsection
