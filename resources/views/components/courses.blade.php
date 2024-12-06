
    <div class="card bg-black text-white border border-white">
        <div class="my-4 mx-6">
            <div class="flex justify-between py-4">
                <div>
                    <h5 class="text-xl">Course</h5>
                    <h5 class="text-2xl font-bold">{{ $title }}</h5>
                </div>
                <div class="flex justify-end flex-col">
                    <div class="progress-bar bg-info">{{ $progress }}%</div>
                </div>
            </div>
            <div class="border-white border py-4 px-6 rounded">
                <div class="font-bold text-lg">
                    <h1>Modules</h1>
                </div>
                <div class="py-2 px-4">
                    @foreach ($modules as $module)
                    <p>{{ $module }}</p>   
                    @endforeach
                </div>
            </div>
            <div class="flex justify-end gap-6">
                <button class="text-blue-400">View Syllabus</button>
                <div class="rounded">
                    <button class="text-black font-bold text-sm rounded-3xl bg-blue-400 py-1 px-6 mx-6 my-6">Resume Learning</button>
                </div>
            </div>
        </div>
    </div>