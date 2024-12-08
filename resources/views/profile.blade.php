
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
                    <img src="UserCircle.svg" class="w-24">
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

    <section>
            <div class="row justify-content-center ">
            <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Completed Syllabus</h2>
            <div class="flex justify-around flex-wrap gap-x-8 gap-y-12 w-full">
                @for ($i = 0; $i < 5; $i++) {{--kalau misal mau lebih dari 3 syllabus, tambahin lagi aja angkanya --}}
                    @include('components.syllabus-course-card', [
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
                <button class="btn mt-3 py-1 text-white border-white border rounded-3xl px-5">View more</button>
            </div>
        </section>


    <section>
            <div class="row justify-content-center ">
            <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Ongoing Syllabus</h2>
            <div class="flex justify-around flex-wrap gap-x-8 gap-y-12">
            @for ($i = 0; $i < 3; $i++) {{-- Repeat for 3 syllabus cards --}}
            @include('components.syllabus-course-card', [
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
            <button class="btn mt-3 py-1 text-white border-white border rounded-3xl px-5">View more</button>
        </div>
    </section>

    {{-- Saved Syllabus --}}
    <section>
        <div class="row justify-content-center ">
            <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Saved Syllabus</h2>
            <div class="flex justify-around flex-wrap gap-x-8 gap-y-12">
                @for ($i = 0; $i < 3; $i++)
                @include('components.syllabus-course-card', [
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
            <button class="btn mt-3 py-1 text-white border-white border rounded-3xl px-5">View more</button>
        </div>
    </section>

    {{-- Completed Course --}}
    <section class="mt-5 text-white flex flex-col gap-y-6">
        <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Completed Course</h2>
        @for ($i = 0; $i<3; $i++)
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
    </section>
</div>
</div>
<script>
    CourseTable = document.getElementsByClassName("CourseTable");
        dropdown = document.getElementsByClassName("dropdown")
        console.log(dropdown);
        detail= document.getElementsByClassName("detail")
        for (let j=0; j<CourseTable.length; j++){
            dropdown[j].addEventListener("click", function(){
                console.log(CourseTable[j])
                console.log("woy");
                if(dropdown[j].classList.contains("rotate-180")){
                    
                    console.log("jalan");
                detail[j].classList.add("hidden")
                dropdown[j].classList.remove("rotate-180")
                }
                else{
                    console.log("gak");
                detail[j].classList.remove("hidden")
                dropdown[j].classList.add("rotate-180")
                }
            })
        }
</script>
@endsection
