
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
            <h2 class="text-white font-bold text-xl p-3">Completed Syllabus</h2>
            <div class="flex justify-content-between flex-wrap gap-8">
                @for ($i = 0; $i < 3; $i++) {{--kalau misal mau lebih dari 3 syllabus, tambahin lagi aja angkanya --}}
                    <div class="card text-white m-2 border-white border h-64 w-72">
                        <div class="card-header bg-[#3B8C85] text-dark m-0.5 p-2 pl-3">
                            Syllabus Completed!
                        </div>
                        {{-- ini ntar ubah dari database --}}
                        <div class="card-body m-2 pl-3 h-3/5">
                            <h5 class="card-title">Syllabus Title</h5>
                            <p class="card-text text-base">Syllabus description learning. (This description is the same with the "resume" page)</p>
                        </div>
                        <hr class="border-dotted m-2">
                        <div class="card-footer px-4 flex justify-between w-full">
                            <p>Advanced</p>
                            <p>20+ Hours</p>
                        </div>
                    </div>
                @endfor
            </div>
            <div class=" m-2 w-full flex justify-center">
                <button class="btn mt-3 py-1 text-white border-white border rounded-3xl px-5">View more</button>
            </div>
        </section>

    
    <section>    
    <div class="container text-light my-3">
        <div class="row justify-content-center">
        <h2 class="text-white font-bold text-xl p-3">Ongoing Syllabus</h2>
        <div class="flex justify-content-between flex-wrap gap-8">
            @for ($i = 0; $i < 3; $i++) {{-- Repeat for 3 syllabus cards --}}
                <div class="text-white m-2 border-white border h-64 w-72">
                    <div class="card-header bg-[#D9A441] m-0.5 p-2 pl-3">
                        In progress . . .
                    </div>
                    <div class="card-body m-2 pl-3 h-3/5">
                        <h5 class="card-title">Syllabus Title</h5>
                        <p class="card-text">Syllabus description learning. (This description is the same with the "resume" page)</p>
                    </div>
                    <hr class="border-dotted m-2">
                    <div class="card-footer px-4 flex justify-between w-full">
                        <p>Advanced</p>
                        <p>20+ Hours</p>
                    </div>
                </div>
            @endfor
        </div>
        <div class=" m-2 w-full flex justify-center">
            <button class="btn mt-3 py-1 text-white border-white border rounded-3xl px-5">View more</button>
        </div>
    </section>

    {{-- Saved Syllabus --}}
    <section class="mt-5">
        <h2 class="text-white font-bold text-xl p-3">Saved Syllabus</h2>
        <div class="flex justify-content-between flex-wrap gap-8">
            @for ($i = 0; $i < 3; $i++)
                <div class="card text-white m-2 border-white border h-64 w-72">
                    <div class="card-header bg-[#705A8F] m-0.5 p-2 pl-3">
                        Syllabus
                    </div>
                    <div class="card-body m-2 pl-3 h-3/5">
                        <h5 class="card-title">Syllabus Title</h5>
                        <p class="card-text">Syllabus description learning. (This description is the same with the "resume" page)</p>
                    </div>
                    <hr class="border-dotted m-2">
                    <div class="card-footer px-4 flex justify-between w-full">
                        <p>Advanced</p>
                        <p>20+ Hours</p>
                    </div>
                </div>
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