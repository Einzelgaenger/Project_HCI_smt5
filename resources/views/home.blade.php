@extends("layouts.app")

@section("title", "Home")

@section('content')
<div class="py-6 px-10">
    <x-title-card>
        <div class="text-white w-full my-3 ml-3 mr-6">
            <h1 class="text-3xl/loose font-bold">My Learning</h1>
            <div class="flex items-center w-3/4 gap-3 my-2">
                <div class="w-[100%] border border-white h-5 overflow-hidden rounded-[8px]">
                    <div class="w-[{{'38'}}%] bg-[#84C8FF] h-full rounded-[8px]"></div>
                </div>
                <p>38%</p>
            </div>
            <div class="border border-white rounded-[8px] my-2 w-3/4 p-3">
                <p>Course</p>

            </div>
        </div>
        <x-details>
            <div>

            </div>
        </x-details>
    </x-title-card>
    <p>ahkckanscjk</p>
</div>
@endsection
