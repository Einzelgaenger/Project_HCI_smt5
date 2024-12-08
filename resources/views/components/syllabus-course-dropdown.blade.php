
    <div class="CourseTable bg-black text-white rounded border border-white {{ $progress }}">
        <div class="my-4 mx-6">
            <div class="flex justify-between py-4 ">
                <div class="my-4">
                    <h5 class="text-xl">{{ $type }}</h5>
                    <h5 class="text-2xl font-bold">{{ $title }}</h5>
                </div>
                <div class="flex justify-end flex-row items-center">
                    <div class="progress-bar bg-info">{{ $progress }}%</div>
                    <button class="dropdown rotate-180">
                        <img src="CaretUp.svg" alt="" class="max-w-8 ml-6">
                    </button>
                </div>
            </div>
            <div class="detail">
                <div class="border-white border py-4 px-6 rounded">
                    <div class="font-bold text-lg">
                        <h1>{{$type == 'Course' ? 'Modules' : 'Courses'}}</h1>
                    </div>
                    <div class="py-2 px-4 flex flex-col">
                        @foreach ($details as $detail)
                        <div class="flex flex-row p-1">
                            <img src="BookBookmark.svg" alt="" class="px-4 py-1 w-14">
                            <p class="px-4">{{ $detail }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="flex justify-end gap-6">
                    <button class="text-blue-400">View {{ $type }}</button>
                    <div class="rounded">
                        <button class="text-black font-bold text-sm rounded-3xl bg-blue-400 py-1 px-6 mx-6 my-6">Resume Learning</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // let dropdown = document.querySelector(".detail");
        // let isShow = true;
        // function showHide() {
        //     if(isShow){
        //         dropdown.classList.add("hidden");
        //     }
        // }
    
        CourseTable = document.getElementsByClassName("CourseTable");
        // for (let i = 0; i < CourseTable.length; i++){
            dropdown = document.getElementsByClassName("dropdown")
            console.log(dropdown);
            // console.log(CourseTable)
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
            
        // }
    </script>