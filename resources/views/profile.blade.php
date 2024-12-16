
@extends("layouts.app")

@section("title", "Profile")

@section('content')
<div class="p-6">
    <x-title-card>
        <form class ="w-full" action="{{route('profile.update')}}" method="POST">
            @csrf
            <div class="m-3 w-full text-white ">
                <h1 class="text-2xl font-bold">Profile Details</h1>
            </div>

            <hr>
            <div class="flex justify-center py-8 gap-12">
                <div class="flex flex-col m-3 gap-2">
                    <div class="text-white">
                        <p>Username</p>
                        <input class="bg-transparent border-white border rounded-[8px] w-72 h-10 my-2 px-3 placeholder:text-[#B3B3B3]" type="text" value="{{$user->username}}" name="username" placeholder="Username">
                    </div>
                    <div class="text-white">
                        <p>Name</p>
                        <input class="bg-transparent border-white border rounded-[8px] w-72 h-10 my-2 px-3 placeholder:text-[#B3B3B3]" type="text" value="{{$user->name}}" name="name" placeholder="Name">
                    </div>
                </div>
                <div class="flex flex-col m-3 gap-2">
                    <div class="text-white">
                        <p>Email</p>
                        <input class="bg-transparent border-white border rounded-[8px] w-72 h-10 my-2 px-3 placeholder:text-[#B3B3B3]" type="text" value="{{$user->email}}" name="email" placeholder="Email">
                    </div>
                    <div class="text-white">
                        <p>Password</p>
                        <input class="bg-transparent border-white border rounded-[8px] w-72 h-10 my-2 px-3 placeholder:text-[#B3B3B3]" type="password" name="password" placeholder="Password">
                    </div>
                </div>
            </div>

            <div class="w-full flex justify-end">
                <button type="submit" class="text-black font-bold text-base border border-blue-400 bg-blue-400 rounded-3xl py-1 px-8 m-4">
                    <p>Save Changes</p>
                </button>
            </div>
        </form>

    </x-title-card>

    <?php
        $ongoingSyllabi = [];
        foreach ($ongoingCourses as $ongoingCourse) {
            if (!in_array($ongoingCourse->course->syllabus, $ongoingSyllabi)) {
                $ongoingSyllabi[] = $ongoingCourse->course->syllabus;
            }
        }
        $doneSyllabi = [];
        foreach ($doneCourses as $doneCourse) {
            if (!in_array($doneCourse->course->syllabus, $doneSyllabi) && !in_array($doneCourse->course->syllabus, $ongoingSyllabi)) {
                $doneSyllabi[] = $doneCourse->course->syllabus;
            }
        }
    ?>
    <section class="completed syllabus">
        <div class="px-5">
        <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Completed Syllabus</h2>
        <div class="flex justify-center flex-wrap gap-y-12 gap-x-16">
            @foreach ($doneSyllabi as $doneSyllabus)
                @include('components.syllabus-course-card', [
                    'type' => 'Syllabus',
                    'status' => 'Completed',
                    'title' => $doneSyllabus->title,
                    'link' => route('syllabus', $doneSyllabus->id),
                    'description' => $doneSyllabus->description,
                    'difficulty' => $doneSyllabus->difficulty,
                    'duration' => $doneSyllabus->duration,
                ])
            @endforeach
        </div>
        <div class=" my-2 w-full flex justify-center">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>


    <section class="ongoing syllabus">
            <div class="px-5">
            <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Ongoing Syllabus</h2>
            <div class="flex justify-center flex-wrap gap-y-12 gap-x-16">
            @foreach ($ongoingSyllabi as $ongoingSyllabus)
                @include('components.syllabus-course-card', [
                    'type' => 'Syllabus',
                    'status' => 'Ongoing',
                    'title' => $ongoingSyllabus->title,
                    'link' => route('syllabus', $ongoingSyllabus->id),
                    'description' => $ongoingSyllabus->description,
                    'difficulty' => $ongoingSyllabus->difficulty,
                    'duration' => $ongoingSyllabus->duration,
                ])
            @endforeach
        </div>
        <div class=" my-2 w-full flex justify-center">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>

    {{-- Saved Syllabus --}}
    <section class="saved syllabus">
        <div class="px-5">
            <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Saved Syllabus</h2>
            <div class="flex justify-center flex-wrap gap-y-12 gap-x-16">
            @foreach ($savedSyllabi as $savedSyllabus)
                @include('components.syllabus-course-card', [
                    'type' => 'Syllabus',
                    'status' => in_array($savedSyllabus->syllabus_id, array_column($ongoingSyllabi, 'id')) ? 'Ongoing' : (in_array($savedSyllabus->syllabus_id, array_column($doneSyllabi, 'id')) ? 'Completed' : ''),
                    'title' => $savedSyllabus->syllabus->title,
                    'link' => route('syllabus', $savedSyllabus->syllabus->id),
                    'description' => $savedSyllabus->syllabus->description,
                    'difficulty' => $savedSyllabus->syllabus->difficulty,
                    'duration' => $savedSyllabus->syllabus->duration,
                ])
            @endforeach
        </div>
        <div class=" my-2 w-full flex justify-center">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>

    {{-- Completed Course --}}
    <section class="completed course mt-5 text-white flex flex-col gap-y-6">
        <h2 class="text-white font-bold text-xl p-3 mt-7">Completed Course</h2>
        @foreach ($doneCourses as $doneCourse)
            @include('components.syllabus-course-dropdown', [
                'type' => 'Course',
                'title' => $doneCourse->course->title,
                'progress' => 'Completed',
                'details' => array_column($doneCourse->course->module->toArray(), 'title'),
                'link' => route('course', $doneCourse->course_id)
            ])
        @endforeach
        <div class="w-full flex justify-center mt-10">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>


    {{-- Ongoing Course --}}
    <section class="ongoing course mt-5 text-white flex flex-col gap-y-6">
        <h2 class="text-white font-bold text-xl p-3 mt-7">Ongoing Course</h2>
        @foreach ($ongoingCourses as $ongoingCourse)
            @include('components.syllabus-course-dropdown', [
                'type' => 'Course',
                'title' => $ongoingCourse->course->title,
                'progress' => 'Ongoing',
                'details' => array_column($ongoingCourse->course->module->toArray(), 'title'),
                'link' => route('course', $ongoingCourse->course_id)
            ])
        @endforeach
        
        <div class="w-full flex justify-center mt-10">
            <button class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </section>


    {{-- Saved Course --}}
    <section class="saved course mt-5 text-white flex flex-col gap-y-6">
        <h2 class="text-white font-bold text-xl p-3 mt-7">Saved Course</h2>
        @foreach ($savedCourses as $savedCourse)
            @include('components.syllabus-course-dropdown', [
                'type' => 'Course',
                'title' => $savedCourse->course->title,
                'progress' => in_array($savedCourse->course_id, array_column($ongoingCourses->toArray(), 'course_id')) ? 'Ongoing' : (in_array($savedCourse->course_id, array_column($doneCourses->toArray(), 'course_id')) ? 'Completed' : ''),
                'details' => array_column($savedCourse->course->module->toArray(), 'title'),
                'link' => route('course', $savedCourse->course_id)
            ])
        @endforeach
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

    for (let index = 0; index < elements.length; index++) {
        if (elements[index]['type'] == 'syllabus') {
            if (elements[index]['card'].length > 4) {
                for (let index2 = 4; index2 < elements[index]['card'].length; index2++) {
                    elements[index]['card'][index2].classList.add('hidden')
                }
            } else {
                elements[index]['view-btn'].classList.add('hidden')
            }
        }
        else if (elements[index]['type'] == 'course') {
            if (elements[index]['card'].length > 3) {
                for (let index2 = 3; index2 < elements[index]['card'].length; index2++) {
                    elements[index]['card'][index2].classList.add('hidden')
                }
            } else {
                elements[index]['view-btn'].classList.add('hidden')
            }
        }

        elements[index]['view-btn'].addEventListener('click', function () {
            if (elements[index]['type'] == 'syllabus') {
                if (elements[index]['view-btn'].innerText == 'View more') {
                    for (let index2 = 0; index2 < elements[index]['card'].length; index2++) {
                        elements[index]['card'][index2].classList.remove('hidden')
                    }
                    elements[index]['view-btn'].innerText = 'View less'
                }
                else if (elements[index]['view-btn'].innerText == 'View less') {
                    for (let index2 = 0; index2 < 4; index2++) {
                        if (elements[index]['card'][index2].classList.contains('hidden')) {
                            elements[index]['card'][index2].classList.remove('hidden')
                        }
                    }
                    for (let index2 = 4; index2 < elements[index]['card'].length; index2++) {
                        if (!elements[index]['card'][index2].classList.contains('hidden')) {
                            elements[index]['card'][index2].classList.add('hidden')
                        }
                    }
                    elements[index]['view-btn'].innerText = 'View more'
                }
            } else if (elements[index]['type'] == 'course') {
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
            }
        })
    }

    CourseTable = document.getElementsByClassName("CourseTable");
    progress = document.getElementsByClassName("progress-bar")
    dropdown = document.getElementsByClassName("dropdown")
    detail= document.getElementsByClassName("detail")
    for (let j=0; j<CourseTable.length; j++){
        dropdown[j].addEventListener("click", function(){
            if(dropdown[j].classList.contains("rotate-180")){
                progress[j].classList.add("hidden")
                detail[j].classList.add("hidden")
                dropdown[j].classList.remove("rotate-180")
            }
            else{
                detail[j].classList.remove("hidden")
                progress[j].classList.remove("hidden")
                dropdown[j].classList.add("rotate-180")
            }
        })
    }

    </script>
@endsection

