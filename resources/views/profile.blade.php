
@extends("layouts.app")

@section("title", "Learn")

@section('content')
<div class="p-6">
    <x-title-card>
        <div class ="w-full">
            <div class="m-3 w-full text-white ">
                <h1 class="text-2xl font-bold">Profile Details</h1>
            </div>

            <hr class=" ">

        </div>

    </x-title-card>

    <section>
        <div class="container text-light my-3">
            <div class="row justify-content-center ">
            <h2 class="text-white font-bold text-xl p-3 mt-7 mb-3">Completed Syllabus</h2>
            <div class="flex justify-around flex-wrap gap-x-8 gap-y-12">
                @for ($i = 0; $i < 3; $i++) {{--kalau misal mau lebih dari 3 syllabus, tambahin lagi aja angkanya --}}
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
            <div class=" m-2 w-full flex justify-center">
                <button class="btn mt-3 py-1 text-white border-white border rounded-3xl px-5">View more</button>
            </div>
        </section>


    <section>
        <div class="container text-light my-3">
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
        <div class=" m-2 w-full flex justify-center">
            <button class="btn mt-3 py-1 text-white border-white border rounded-3xl px-5">View more</button>
        </div>
    </section>

    {{-- Saved Syllabus --}}
    <div class="container text-light my-3">
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
        <div class=" m-2 w-full flex justify-center">
            <button class="btn mt-3 py-1 text-white border-white border rounded-3xl px-5">View more</button>
        </div>
    </section>

    {{-- Completed Course --}}
    <section class="mt-5">
        <h2>Completed Course</h2>
        <div class="card bg-dark text-white ">
            <div class="card-body">
                <h5 class="card-title">Course Title 1</h5>
                <div class="progress mb-2">
                    <div class="progress-bar bg-info" style="width: 100%;">100%</div>
                </div>
                <ul class="list-unstyled">
                    <li>Module 1</li>
                    <li>Module 2</li>
                    <li>Module 3</li>
                    <li>Module 4</li>
                    <li>Module 5</li>
                </ul>
                <button class="btn btn-primary">Resume Learning</button>
            </div>
        </div>
    </section>
</div>
</div>
@endsection
