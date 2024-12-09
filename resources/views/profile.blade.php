
@extends("layouts.app")

@section("title", "Profile")

@section('content')
<div class="p-6">
    <x-title-card>
        <div class ="w-full">
            <div class="m-3 w-full text-white ">
                <h1 class="text-2xl font-bold">Profile Details</h1>
            </div>

            <hr>
            <div class="flex justify-center py-8 gap-12">

                <div class=" justify-center flex flex-col ">
                    <img src="{{asset("UserCircle.svg")}}" class="w-24">
                    <h3>
                        <a class="text-blue-300" href="#">Choose Photo</a>
                    </h3>
                </div>
                <div class="flex flex-col m-3 gap-4">
                    <div class="text-white">
                        <p>Username</p>
                        <input class="bg-transparent border-white border rounded-l w-64" type="text">
                    </div>
                    <div class="text-white">
                        <p>Email</p>
                        <input class="bg-transparent border-white border rounded-l w-64" type="email">
                    </div>
                </div>
            </div>

            <div class="w-full flex justify-end">
                <div class="text-black font-bold text-base border border-blue-400 bg-blue-400 rounded-3xl py-1 px-8 m-4">
                    <p>Save Changes</p>
                </div>
            </div>
        </div>

    </x-title-card>

    <section class="completed syllabus">
            <div class="row justify-content-center ">
            <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Completed Syllabus</h2>
            <div class="flex justify-around flex-wrap gap-x-8 gap-y-12 w-full">
                @for ($i = 0; $i < 5; $i++) {{--kalau misal mau lebih dari 3 syllabus, tambahin lagi aja angkanya --}}
                    @include('components.syllabus-course-card', [
                        'link' => 'youtube.com',
                        'type' => 'Syllabus',
                        'status' => 'Completed',
                        'title' => 'Syllabus Title',
                        'description' => 'Syllabus description learning. (This description is the same with the "resume" page) Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam illum, enim laborum architecto cum illo nulla eligendi. Magnam quisquam officia ipsa harum dignissimos recusandae mollitia fugit. Error dicta vel voluptatum.',
                        'difficulty' => 'Beginner Friendly',
                        'duration' => '20+'
                    ])
                @endfor
            </div>
            <div class=" my-2 w-full flex justify-center">
                <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
            </div>
        </section>


    <section class="ongoing syllabus">
            <div class="row justify-content-center ">
            <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Ongoing Syllabus</h2>
            <div class="flex justify-around flex-wrap gap-x-8 gap-y-12">
            @for ($i = 0; $i < 4; $i++) {{-- Repeat for 3 syllabus cards --}}
            @include('components.syllabus-course-card', [
                'link' => 'youtube.com',
                'type' => 'Syllabus',
                'status' => 'Ongoing',
                'title' => 'Syllabus Title',
                'description' => 'Syllabus description learning. (This description is the same with the "resume" page) Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam illum, enim laborum architecto cum illo nulla eligendi. Magnam quisquam officia ipsa harum dignissimos recusandae mollitia fugit. Error dicta vel voluptatum.',
                'difficulty' => 'Advanced',
                'duration' => '5'
            ])
            @endfor
        </div>
        <div class=" my-2 w-full flex justify-center">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>

    {{-- Saved Syllabus --}}
    <section class="saved syllabus">
        <div class="row justify-content-center ">
            <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Saved Syllabus</h2>
            <div class="flex justify-around flex-wrap gap-x-8 gap-y-12">
                @for ($i = 0; $i < 4; $i++)
                @include('components.syllabus-course-card', [
                'link' => 'youtube.com',
                'type' => 'Syllabus',
                'status' => 'Saved',
                'title' => 'Syllabus Title',
                'description' => 'Syllabus description learning. (This description is the same with the "resume" page) Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam illum, enim laborum architecto cum illo nulla eligendi. Magnam quisquam officia ipsa harum dignissimos recusandae mollitia fugit. Error dicta vel voluptatum.',
                'difficulty' => 'Intermediate',
                'duration' => '10'
                ])
            @endfor
        </div>
        <div class=" my-2 w-full flex justify-center">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>

    {{-- Completed Course --}}
    <section class="completed course mt-5 text-white flex flex-col gap-y-6">
        <h2 class="text-white font-bold text-xl p-3 mt-7">Completed Course</h2>
        @for ($i = 0; $i<4; $i++)
            @include('components.syllabus-course-dropdown', [
                'type' => 'Course',
                'title' => 'Course Title 1',
                'progress' => rand(1,100),
                'details' => [
                    'Module 1',
                    'Module 2',
                    'Module 3',
                    'Module 4',
                    'Module 5'
                ]
            ])
            @endfor
        <div class="w-full flex justify-center mt-10">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>


    {{-- Ongoing Course --}}
    <section class="ongoing course mt-5 text-white flex flex-col gap-y-6">
        <h2 class="text-white font-bold text-xl p-3 mt-7">Ongoing Course</h2>
        {{-- {{{$ongoingCourses}}} --}}
        {{-- @foreach ($ongoingCourses as $keys => $values)
            {{$keys}}=>
            @if (is_array($values))
                @foreach ($values as $keys2 => $values2)
                    {{$keys2}}->
                    @if (is_array($values2))
                        @foreach ($values2 as $keys3 => $values3)
                            {{$keys3}}: {{$values3}}<br>
                        @endforeach
                    @else
                        {{$values2}}<br>
                    @endif
                @endforeach
            @else
                {{$values}}<br>
            @endif --}}
        @foreach ($ongoingCourses as $ongoing)
            {{-- {{$ongoing}}<br><br> --}}
            {{-- @include('components.syllabus-course-dropdown', [
                'type' => 'Course',
                'title' => $ongoing['course']['title'],
                'progress' => rand(1,100),
                'details' => array_column($ongoing['module'], 'title')
            ]) --}}
        @endforeach
        <div class="w-full flex justify-center mt-10">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>


    {{-- Saved Course --}}
    <section class="saved course mt-5 text-white flex flex-col gap-y-6">
        <h2 class="text-white font-bold text-xl p-3 mt-7">Saved Course</h2>
        @for ($i = 0; $i<4; $i++)
            @include('components.syllabus-course-dropdown', [
                'type' => 'Course',
                'title' => 'Course Title 1',
                'progress' => rand(1,100),
                'details' => [
                    'Module 1',
                    'Module 2',
                    'Module 3',
                    'Module 4',
                    'Module 5'
                ]
            ])
            @endfor
        <div class="w-full flex justify-center mt-10">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>



</div>
</div>
<script>
    completedSyllabus = document.getElementsByClassName('completed syllabus')
    ongoingSyllabus = document.getElementsByClassName('ongoing syllabus')
    savedSyllabus = document.getElementsByClassName('saved syllabus')
    completedCourse = document.getElementsByClassName('completed course')
    ongoingCourse = document.getElementsByClassName('ongoing course')
    savedCourse = document.getElementsByClassName('saved course')

    elements = []
    elements[0] = {'type': 'syllabus', 'section': completedSyllabus[completedSyllabus.length-1]}
    elements[1] = {'type': 'syllabus', 'section': ongoingSyllabus[ongoingSyllabus.length-1]}
    elements[2] = {'type': 'syllabus', 'section': savedSyllabus[savedSyllabus.length-1]}
    elements[3] = {'type': 'course', 'section': completedCourse[completedCourse.length-1]}
    elements[4] = {'type': 'course', 'section': ongoingCourse[ongoingCourse.length-1]}
    elements[5] = {'type': 'course', 'section': savedCourse[savedCourse.length-1]}
    
    for (let index = 0; index < elements.length; index++) {
        if (elements[index]['type'] == 'syllabus') {
            card = elements[index]['section'].getElementsByClassName('card')
        }
        else if (elements[index]['type'] == 'course') {
            card = elements[index]['section'].getElementsByClassName('CourseTable')
        }
        viewBtn = elements[index]['section'].getElementsByClassName('view-more')
        
        elements[index]['card'] = card
        elements[index]['view-btn'] = viewBtn[viewBtn.length-1]
    }
    console.log(elements)
    
    for (let index = 0; index < elements.length; index++) {
        if (elements[index]['card'].length > 3) {
            for (let index2 = 3; index2 < elements[index]['card'].length; index2++) {
                elements[index]['card'][index2].classList.add('hidden')
            }
        } else {
            elements[index]['view-btn'].classList.add('hidden')
        }

        elements[index]['view-btn'].addEventListener('click', function () {
            if (elements[index]['view-btn'].innerText == 'View more') {
                for (let index2 = 0; index2 < elements[index]['card'].length; index2++) {
                    elements[index]['card'][index2].classList.remove('hidden')
                }
                elements[index]['view-btn'].innerText = 'View less'
            }
            else if (elements[index]['view-btn'].innerText == 'View less') {
                for (let index2 = 0; index2 < 3; index2++) {
                    if (elements[index]['card'][index2].classList.contains('hidden')) {
                        elements[index]['card'][index2].classList.remove('hidden')
                    }
                }
                for (let index2 = 3; index2 < elements[index]['card'].length; index2++) {
                    if (!elements[index]['card'][index2].classList.contains('hidden')) {
                        elements[index]['card'][index2].classList.add('hidden')
                    }
                }
                elements[index]['view-btn'].innerText = 'View more'
            }
        })
    }

    </script>
@endsection

