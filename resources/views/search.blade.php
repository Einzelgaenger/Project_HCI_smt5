@extends("layouts.app")

@section("title", "Search")

@section('content')
<div class="flex text-white">
    <div class="h-screen w-1/4 sticky top-0 bg-[#0A0A0A] px-7">
        <div class="flex gap-2 font-semibold text-xl my-3">
            <img src="{{asset('Funnel.svg')}}">
            <h3>Filters</h3>
        </div>
        <div class="px-2">
            <h5 class="font-medium text-sm">Level</h5>
            <label for="beginner-friendly" class="w-full flex items-center gap-10 cursor-pointer my-1">
                <div class="flex w-full gap-3 group/details items-center">
                    <input type="checkbox" name="beginner-friendly" id="beginner-friendly" value="Beginner Friendly" class="filter filter-level hidden peer">
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
                    <input type="checkbox" name="intermediate" id="intermediate" value="Intermediate" class="filter filter-level hidden peer">
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
                    <input type="checkbox" name="advanced" id="advanced" value="Advanced" class="filter filter-level hidden peer">
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
                    <input type="checkbox" name="syllabus" id="syllabus" value="Syllabus" class="filter filter-type hidden peer">
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
                    <input type="checkbox" name="course" id="course" value="Course" class=" filter filter-type hidden peer">
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
                <input type="radio" checked name="time" id="all" value="all" class="filter filter-time hidden peer">
                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:hidden"></span>
                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:flex">
                    <span class="absolute w-2 h-2 rounded-2xl bg-black"></span>
                </span>
                <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                    All
                </div>
            </label>
            <label for="5-less" class="w-full flex items-center gap-3 cursor-pointer my-1">
                <input type="radio" name="time" id="5-less" value="5-less" class="filter filter-time hidden peer">
                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:hidden"></span>
                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:flex">
                    <span class="absolute w-2 h-2 rounded-2xl bg-black"></span>
                </span>
                <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                    Less than 5 hours
                </div>
            </label>
            <label for="5-10" class="w-full flex items-center gap-3 cursor-pointer my-1">
                <input type="radio" name="time" id="5-10" value="5-10" class="filter filter-time hidden peer">
                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:hidden"></span>
                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:flex">
                    <span class="absolute w-2 h-2 rounded-2xl bg-black"></span>
                </span>
                <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                    5 - 10 hours
                </div>
            </label>
            <label for="10-20" class="w-full flex items-center gap-3 cursor-pointer my-1">
                <input type="radio" name="time" id="10-20" value="10-20" class="filter filter-time hidden peer">
                <span class="w-5 h-5 border-2 border-white group-hover/details:border-[#a9a9a9] flex items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:hidden"></span>
                <span class="w-5 h-5 border-2 bg-white hidden items-center justify-center rounded-2xl transition-colors duration-200 peer-checked:flex">
                    <span class="absolute w-2 h-2 rounded-2xl bg-black"></span>
                </span>
                <div class="truncate text-lg transition-colors duration-200 group-hover/details:text-[#a9a9a9]">
                    10 - 20 hours
                </div>
            </label>
            <label for="20-more" class="w-full flex items-center gap-3 cursor-pointer my-1">
                <input type="radio" name="time" id="20-more" value="20-more" class="filter filter-time hidden peer">
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
                    <h1 class="text-2xl font-semibold">Related Search</h1>
                    <p class="search-result text-sm">26 Results</p>
                </div>
                <div class="flex flex-wrap justify-between gap-y-10">
                    @for ($i = 0; $i < 26; $i++)
                    @include('components.syllabus-course-card', [
                        'link' => 'youtube.com',
                        'type' => array('Course', 'Syllabus')[rand(0,1)],
                        'status' => array('Completed', 'Ongoing', 'None')[rand(0,2)],
                        'title' => 'Title',
                        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque voluptas maiores dolor! Doloremque, perspiciatis dolorum reprehenderit voluptates quisquam pariatur minima beatae facere ea eos, deserunt praesentium? Adipisci voluptate placeat soluta!',
                        'difficulty' => array('Beginner Friendly', 'Intermediate', 'Advanced')[rand(0,2)],
                        'duration' => rand(1,36),
                    ])
                    @endfor
                </div>
                <div class="search-pagination w-full flex justify-center mt-10"></div>
            </div>
        </div>
    </div>
</div>

<script>
    levels = document.getElementsByClassName('filter-level')
    types = document.getElementsByClassName('filter-type')
    times = document.getElementsByClassName('filter-time')

    // Filter
    function getFilter(){
        filterlevel = []
        filtertype = []
        filtertime = ''
        for (let index = 0; index < levels.length; index++) {
            if (levels[index].checked) {
                filterlevel.push(levels[index].value)
            }
        }
        for (let index = 0; index < types.length; index++) {
            if (types[index].checked) {
                filtertype.push(types[index].value)
            }
        }
        for (let index = 0; index < times.length; index++) {
            if (times[index].checked) {
                filtertime = times[index].value
                break
            }
        }
        filterResult = {}
        filterResult['level'] = filterlevel
        filterResult['type'] = filtertype
        filterResult['time'] = filtertime

        return(filterResult)
    }

    // Pagination
    function doPagination(){
        searches = document.getElementsByClassName('search')
        searchCard = searches[searches.length-1].getElementsByClassName('card filtered-level filtered-type filtered-time')
        searchResult = searches[searches.length-1].getElementsByClassName('search-result')
        searchResult[searchResult.length-1].innerText = searchCard.length + ' Results'
        if (searchCard.length > 9) {
            searchPages = searches[searches.length-1].getElementsByClassName('search-pagination')
            searchPages = searchPages[searchPages.length-1]
            pages = Math.ceil(searchCard.length/9)
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
                        searchCard[index2].classList.add('hidden')
                    }

                    if (searchCard.length - index*9 <= 9) {
                        for (let index2 = index*9; index2 < searchCard.length; index2++) {
                            searchCard[index2].classList.remove('hidden')
                        }
                    }
                    else {
                        for (let index2 = index*9; index2 < (index+1)*9; index2++) {
                            searchCard[index2].classList.remove('hidden')
                        }
                        for (let index2 = (index+1)*9; index2 < searchCard.length; index2++) {
                            searchCard[index2].classList.add('hidden')
                        }
                    }
                })

                searchPages.appendChild(pagination)
            }
            for (let index = 9; index < searchCard.length; index++) {
                searchCard[index].classList.add('hidden')
            }
        }
    }

    doPagination()

    filters = document.getElementsByClassName('filter')

    for (let index = 0; index < filters.length; index++) {
        filters[index].addEventListener('change', function (){
            searches = document.getElementsByClassName('search')
            searchCard = searches[searches.length-1].getElementsByClassName('card')

            for (let index2 = 0; index2 < searchCard.length; index2++) {
                searchCard[index2].classList.add('hidden')
            }

            filtered = getFilter()

            for (let index2 = 0; index2 < searchCard.length; index2++) {
                searchCard[index2].classList.remove('filtered-level', 'filtered-type', 'filtered-time')
            }

            if (filtered['level'].length == 0) {
                for (let index3 = 0; index3 < searchCard.length; index3++) {
                    searchCard[index3].classList.add('filtered-level')
                }
            }

            for (let index2 = 0; index2 < filtered['level'].length; index2++) {
                chosenLevelCard = searches[searches.length-1].getElementsByClassName(filtered['level'][index2])

                for (let index3 = 0; index3 < chosenLevelCard.length; index3++) {
                    chosenLevelCard[index3].classList.add('filtered-level')
                }
            }


            if (filtered['type'].length == 0) {
                for (let index3 = 0; index3 < searchCard.length; index3++) {
                    searchCard[index3].classList.add('filtered-type')
                }
            }

            for (let index2 = 0; index2 < filtered['type'].length; index2++) {
                chosenTypeCard = searches[searches.length-1].getElementsByClassName(filtered['type'][index2])
                for (let index3 = 0; index3 < chosenTypeCard.length; index3++) {
                    chosenTypeCard[index3].classList.add('filtered-type')
                }
            }


            if (filtered['time'] == 'all') {
                for (let index3 = 0; index3 < searchCard.length; index3++) {
                    searchCard[index3].classList.add('filtered-time')
                }
            }

            chosenTimeCard = searches[searches.length-1].getElementsByClassName(filtered['time'])
            for (let index3 = 0; index3 < chosenTimeCard.length; index3++) {
                chosenTimeCard[index3].classList.add('filtered-time')
            }

            chosenCard = searches[searches.length-1].getElementsByClassName('card filtered-level filtered-type filtered-time')
            for (let index2 = 0; index2 < chosenCard.length; index2++) {
                chosenCard[index2].classList.remove('hidden')
            }

            pagination = document.getElementsByClassName('pagination')
            while (pagination.length > 0) {
                pagination[0].remove()
            }
            doPagination()
        })
    }

</script>

@endsection
