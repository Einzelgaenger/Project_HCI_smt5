@extends("layouts.app")

@section("title", "Home")

@section('content')
<div class="py-6 px-10">
    <x-title-card>
        <div class="text-white w-full sm:w-8/12 my-3 ml-3">
            <h1 class="text-xl md:text-2xl/9 lg:text-3xl/10 font-bold mb-4">My Learning</h1>
            <div class="flex items-center w-11/12 gap-3 my-2 h-4">
                @include('components.progress-bar', ['percentage' => 38])
            </div>
            <div class="border border-white rounded-[8px] mt-4 mb-1 w-11/12 p-3 flex items-end justify-between">
                <div class="w-3/4">
                    <p class="">Course</p>
                    <h1 class="text-lg/5 sm:text-xl lg:text-2xl/10 font-semibold my-2 w-full truncate">Pre Security Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, magni?</h1>
                    <p class="text-[0.65rem] w-full overflow-hidden line-clamp-2">Current Module: Intro to Defensive Security Lorem ipsum dolor sit amet consectetur adipisicing elit. A, mollitia!</p>
                </div>
                <a href="#course-presec" class="flex items-end text-xs lg:text-sm font-medium border border-white px-4 py-1 rounded-[16px] hover:border-[#a9a9a9] hover:text-[#a9a9a9]"><p class="hidden lg:block">Resume &nbsp;</p><img src="ArrowRight.svg" class="w-4 lg:w-5"></a>
            </div>
            <a href="#path-in-progress" class="text-xs text-[#84C8FF] font-medium">View path in progress&ensp;></a>
        </div>
        <div class="w-3/12 mb-8 mt-4 mr-4 hidden sm:block">
            <x-details>
                <div class="text-white flex flex-col gap-7 w-full">
                    <div class="flex justify-between items-center w-full">
                        <h1 class="text-sm hidden md:block lg:text-base xl:text-lg font-semibold">Your Stats</h1>
                        <a href="#profile" class="font-medium border border-white md:hidden lg:block px-2 xl:px-3 py-1 text-xs lg:text-sm xl:text-base rounded-[16px] hover:bg-white hover:text-black">Go to profile</a>
                        <a href="#profile" class="font-medium border border-white hidden md:block lg:hidden px-2 py-1 rounded-[16px] hover:bg-white"><img src="User.svg" alt="Profile" class="w-5 hover:invert"></a>
                    </div>
                    <div class="flex items-center gap-1 lg:gap-2">
                        <img src="UserCircle.svg" class="w-8 lg:w-[3.25rem]">
                        <p class="text-sm lg:text-base w-full truncate">Username Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, recusandae nisi? Harum laboriosam nostrum minima voluptas reiciendis ut nemo, sequi aperiam consectetur ducimus? Dolor at molestias earum, suscipit maxime quisquam?</p>
                    </div>
                    <div class="flex justify-center gap-x-5 gap-y-2 lg:justify-between w-full flex-wrap">
                        <div class="flex gap-1 w-[25%] justify-center items-center">
                            <img src="completed.svg" alt="Done" class="w-6 lg:w-8">
                            <p class="text-xs md:text-base">3</p>
                        </div>
                        <div class="flex gap-1 w-[25%] justify-center items-center">
                            <img src="ongoing.svg" alt="Ongoing" class="w-6 lg:w-8">
                            <p class="text-xs md:text-base">8</p>
                        </div>
                        <div class="flex gap-1 w-[25%] justify-center items-center">
                            <img src="saved.svg" alt="Saved" class="w-6 lg:w-8">
                            <p class="text-xs md:text-base">12</p>
                        </div>
                    </div>
                </div>
            </x-details>
        </div>
    </x-title-card>
    <div class="text-white mt-12">
        <h1 class="font-bold text-lg md:text-xl mb-5">Recommended for you</h1>
        <div class="flex justify-around flex-wrap gap-x-8 gap-y-12">
            @for ($i=0; $i < 6; $i++)
                @include('components.syllabus-course-card', [
                    'type' => 'Course',
                    'status' => 'None',
                    'title' => 'Course Title A',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit totam corrupti beatae sapiente repudiandae minus voluptas voluptatibus ab, enim laboriosam quia eligendi dolorum molestiae, ut possimus veniam ipsam cupiditate eum?',
                    'difficulty' => 'Advanced',
                    'duration' => 45,
                ])
            @endfor
        </div>
        <div class="w-full flex justify-center mt-10">
            <button onclick="view()" class="view-more font-medium py-1 text-white border-white border rounded-3xl px-5 hover:bg-white hover:text-black">View more</button>
        </div>
    </div>
    <div class="text-white my-12">
        <h1 class="font-bold text-lg md:text-xl mb-5">Forum</h1>
        <div class="flex justify-around flex-wrap gap-x-8 gap-y-12 w-full">
            @for ($i=0; $i<3; $i++)
            @include('components.forum-card', [
                'link' => '#link-xyz',
                'username' => 'Username Lorem ipsum dolor sit amet consectetur adipisicing elit',
                'timestamp' => 'Dec 6',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo blanditiis laboriosam quas doloremque consectetur eligendi rerum iure sunt! Impedit expedita iusto dolore at maiores dolorem doloremque illum, beatae, commodi, consequuntur blanditiis deserunt earum cupiditate eligendi quod aliquid quibusdam culpa suscipit modi repellat ut! Eligendi est hic sequi nesciunt adipisci alias blanditiis illum explicabo reprehenderit pariatur id asperiores voluptate ab consequatur earum, quisquam tenetur laboriosam qui rem animi inventore ex? Rem explicabo assumenda iusto labore! Accusantium eveniet nemo dignissimos, deserunt animi explicabo ratione nisi. Saepe mollitia error maxime laborum, autem soluta nisi, voluptate laboriosam nemo, expedita enim? Impedit quasi sunt sapiente!',
                'liked' => true,
                'likes' => 256123456,
                'comments' => 150000,
            ])
            @endfor

        </div>
</div>

<script>
    cards = document.getElementsByClassName('card')

    if (cards.length > 3) {
        for (let index = 3; index < cards.length; index++) {
            cards[index].classList.add('hidden')
        }
    } else {
        viewMore = document.getElementsByClassName('view-more')
        viewMore[viewMore.length-1].classList.add('hidden')
    }

    function view() {
        if (cards.length > 3) {
            viewMore = document.getElementsByClassName('view-more')
            for (let index = 3; index < cards.length; index++) {
                if (cards[index].classList.contains('hidden')) {
                    cards[index].classList.remove('hidden')
                    viewMore[viewMore.length-1].innerText = 'View less'
                }
                else{
                    cards[index].classList.add('hidden')
                    viewMore[viewMore.length-1].innerText = 'View more'
                }
            }
        }
    }
</script>
@endsection
