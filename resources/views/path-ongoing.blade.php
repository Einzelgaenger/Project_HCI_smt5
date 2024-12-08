@extends("layouts.app")

@section("title", "Path in Progress")

@section('content')
<div class="py-10 px-16 text-white">
    <h1 class="text-xl font-semibold">Your courses and syllabus</h1>
    <div class="my-4">
        <div class="grid grid-cols-9 text-center">
            <div class="py-4 border-b-4 border-[#84C8FF]" onclick="#">In Progress</div>
            <div class="py-4 border-b border-white" onclick="#">Completed</div>
            @for ( $i = 2 ; $i < 9 ; $i++)
                <div class="py-4 border-b border-white"></div>
            @endfor
        </div>
        <div class="mt-3">
            @for ($i = 0; $i < 15; $i++)
                @include('components.syllabus-course-dropdown', [
                    'type' => 'Course',
                    'title' => 'Course Title 1',
                    'progress' => 100,
                    'details' => [
                        'Module 1',
                        'Module 2',
                        'Module 3',
                        'Module 4',
                        'Module 5'
                    ]
                ])
            @endfor
        </div>
    </div>
</div>

@endsection
