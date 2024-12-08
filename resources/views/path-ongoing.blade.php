@extends("layouts.app")

@section("title", "Path in Progress")

@section('content')
<div class="py-10 px-16 text-white">
    <h1 class="text-2xl font-semibold">About your courses and syllabus</h1>
    <div class="my-4">
        <div class="grid grid-cols-9 text-center">
            <div class="header ongoing py-4 border-b-4 border-[#84C8FF]" onclick="viewOngoing()">In Progress</div>
            <div class="header completed py-4 border-b border-white" onclick="viewCompleted()">Completed</div>
            @for ( $i = 2 ; $i < 9 ; $i++)
                <div class="py-4 border-b border-white"></div>
            @endfor
        </div>
        <div class="paths my-4 flex flex-col gap-4">
            @for ($i = 0; $i < 5; $i++)
                @include('components.syllabus-course-dropdown', [
                    'type' => array('Course', 'Syllabus')[rand(0,1)],
                    'title' => 'Title 1',
                    'progress' => rand(1,99),
                    'details' => [
                        'what is this',
                        'this is what',
                        'why am i here',
                        'just to suffer',
                        'cry emoji'
                    ]
                ])
            @endfor
            @for ($i = 0; $i < 5; $i++)
                @include('components.syllabus-course-dropdown', [
                    'type' => array('Course', 'Syllabus')[rand(0,1)],
                    'title' => 'Title 1',
                    'progress' => 100,
                    'details' => [
                        'what is this',
                        'this is what',
                        'why am i here',
                        'just to suffer',
                        'cry emoji'
                    ]
                ])
            @endfor
        </div>
    </div>
</div>

<script>
    CourseTable = document.getElementsByClassName('CourseTable')
    for (let index = 0; index < CourseTable.length; index++) {
        if (CourseTable[index].classList.contains('100')) {
            CourseTable[index].classList.add('hidden')
        }
    }

    function viewCompleted(){
        completed = document.getElementsByClassName('header completed')
        ongoing = document.getElementsByClassName('header ongoing')
        for (let index = 0; index < CourseTable.length; index++) {
            if (CourseTable[index].classList.contains('100')) {
                CourseTable[index].classList.remove('hidden')
            }
            else {
                CourseTable[index].classList.add('hidden')
            }
        }
        if(!completed[completed.length - 1].classList.contains('border-b-4')){
            completed[completed.length - 1].classList.add('border-b-4')
        }
        if(!completed[completed.length - 1].classList.contains('border-[#84C8FF]')){
            completed[completed.length - 1].classList.add('border-[#84C8FF]')
        }
        completed[completed.length - 1].classList.remove('border-b', 'border-white')

        if(!ongoing[ongoing.length - 1].classList.contains('border-b')){
            ongoing[ongoing.length - 1].classList.add('border-b')
        }
        if(!ongoing[ongoing.length - 1].classList.contains('border-white')){
            ongoing[ongoing.length - 1].classList.add('border-white')
        }
        ongoing[ongoing.length - 1].classList.remove('border-b-4', 'border-[#84C8FF]')
    }

    function viewOngoing(){
        ongoing = document.getElementsByClassName('header ongoing')
        completed = document.getElementsByClassName('header completed')
        for (let index = 0; index < CourseTable.length; index++) {
            if (CourseTable[index].classList.contains('100')) {
                CourseTable[index].classList.add('hidden')
            }
            else {
                CourseTable[index].classList.remove('hidden')
            }
        }
        if(!ongoing[ongoing.length - 1].classList.contains('border-b-4')){
            ongoing[ongoing.length - 1].classList.add('border-b-4')
        }
        if(!ongoing[ongoing.length - 1].classList.contains('border-[#84C8FF]')){
            ongoing[ongoing.length - 1].classList.add('border-[#84C8FF]')
        }
        ongoing[ongoing.length - 1].classList.remove('border-b', 'border-white')

        if(!completed[completed.length - 1].classList.contains('border-b')){
            completed[completed.length - 1].classList.add('border-b')
        }
        if(!completed[completed.length - 1].classList.contains('border-white')){
            completed[completed.length - 1].classList.add('border-white')
        }
        completed[completed.length - 1].classList.remove('border-b-4', 'border-[#84C8FF]')
    }

    CourseTable = document.getElementsByClassName("CourseTable");
    dropdown = document.getElementsByClassName("dropdown")
    detail= document.getElementsByClassName("detail")
    for (let j=0; j<CourseTable.length; j++){
        dropdown[j].addEventListener("click", function(){
            if(dropdown[j].classList.contains("rotate-180")){
                detail[j].classList.add("hidden")
                dropdown[j].classList.remove("rotate-180")
            }
            else{
                detail[j].classList.remove("hidden")
                dropdown[j].classList.add("rotate-180")
            }
        })
    }

</script>

@endsection
