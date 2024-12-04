@extends("layouts.app")

@section("title", "Learn")

@section('content')
<div class="py-6">
        <div class="bg-gradient-to-bl from-[#2c2c2c] from-10% to-[#0a0a0a] to-70% mx-[24px] rounded flex px-4 h-64">
            <article class="w-[70vw]">
                {{-- <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                    <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                </div> --}}
                <div class="my-7 ml-3 mr-6">
                    <h3 class="text-3xl
                    w-4/5
                    font-black
                     text-white">
                    Boost your conversion rate
                    </h3>
                    <p class="mt-5 text-sm/6 w-full text-white">Brief description of the syllabus, what to the user expect to learn, what they will do, and so on. Make it a bit more longer to make sure  a long paragraph would fit perfectly to the design. Please don’t read these, it’s for eliminating white spaces.</p>
                </div>
            </article>
            <div class="bg-black my-8 ml-8 w-1/5 h-4/5 rounded p-3">
                <p class="text-red-200 text-xl md:text-[20px] lg:text-xl">Beginner Friendly</p>
                <hr class="">
                <p class="text-red-200 text-xl md:text-[20px]">4 Hours</p>
                <hr>
                <p class="text-red-200 text-xl md:text-[20px]">12 Lessons</p>
                <hr>
                <div class="flex">
                    <button class="bg-[#2c2c2c] text-white rounded py-2">Save</button>
                    <button class="bg-[#2c2c2c] text-white rounded py-2">number</button>
                </div>


            </div>
        </div>    
        <div>
            <h1 class="text-white">Lelololo</h1>
            <h1 class="text-white">Lelololo</h1>
            <h1 class="text-white">Lelololo</h1>
            <h1 class="text-white">Lelololo</h1>
            <h1 class="text-white">Lelololo</h1>
        </div>
            <!-- More posts... -->
        </div>
    </div>
</div>
    </div>
@endsection
