@extends("layouts.app")

@section("title", "Path in Progress")

@section('content')
<div class="py-10 px-16 text-white">
    <h1 class="text-2xl font-semibold">About your courses and syllabus</h1>
    <div class="my-4">
        <div class="grid grid-cols-9 text-center">
            <div class="header ongoing py-4 border-b-4 border-[#84C8FF]" onclick="viewOngoing()">In Progress</div>
            <div class="header completed py-4 border-b border-white" onclick="#">Completed</div>
            @for ( $i = 2 ; $i < 9 ; $i++)
                <div class="py-4 border-b border-white"></div>
            @endfor
        </div>
        <div class="paths my-4 flex flex-col gap-4">
            @for ($i = 0; $i < 10; $i++)
                @include('components.syllabus-course-dropdown', [
                    'type' => array('Course', 'Syllabus')[rand(0,1)],
                    'title' => 'Title 1',
                    'progress' => rand(1,100),
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
    cards = document.getElementsByClassName('cards')
    for (let index = 0; index < cards.length; index++) {
        if (cards[index].classList.contains('100')) {
            cards[index].classList.add('hidden')
        }
    }

    // function viewOngoing(){
    //     ongoing = document.getElementsByClassName('header ongoing')
    //     cards = document.getElementsByClassName('cards')
    //     for (let index = 0; index < cards.length; index++) {
    //         if (cards[index].classList.contains('100')) {
    //             cards[index].classList.add('hidden')
    //         }
    //         else {

    //         }
    //     }
    //     if(!ongoing.classList.contains('border-b-4')){
    //         classList.add('border-b-4')
    //     }
    //     if(!ongoing.classList.contains('border-[#84C8FF]')){
    //         classList.add('border-[#84C8FF]')
    //     }
    // }

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
