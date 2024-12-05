@extends("layouts.app")

@section("title", "Learn")

@section('content')
<div class="p-6">
        <x-title-card>
            <article class="w-4/5">
                {{-- <div class="flex items-center gap-x-4 text-xs">
                    <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                    <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                </div> --}}
                <div class="my-7 ml-3 mr-6 w-full">
                    <h3 class="text-2xl w-full lg:w-3/4 font-black text-white sm:text-3xl overflow-hidden line-clamp-2">
                    Boost your conversion rate Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
                    </h3>
                    <p class="mt-3 text-xs/5 w-full lg:w-11/12 text-white sm:text-sm/6 xl:text-base h-[6.5rem] sm:h-24 overflow-hidden line-clamp-5 sm:line-clamp-4">Brief description of the syllabus, what to the user expect to learn, what they will do, and so on. Make it a bit more longer to make sure  a long paragraph would fit perfectly to the design. Please don’t read these, it’s for eliminating white spaces. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem illo magni animi nisi accusamus aut quam expedita ut dolorem, itaque, corporis rerum dolores tempore quasi excepturi maiores minus. Nihil veritatis sed provident a, voluptatem, corrupti consequatur minus tempora dicta accusantium ullam cupiditate eligendi impedit reprehenderit asperiores laboriosam non magni ipsam? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, nobis id amet adipisci hic voluptates voluptate mollitia reiciendis fugiat, voluptas aspernatur eligendi quam. Non, modi nihil molestiae iure temporibus error perspiciatis id numquam? Corrupti ad veritatis nisi voluptates voluptatem harum, expedita, vitae quam, ipsam delectus architecto explicabo. Perferendis, eum. Quia!</p>
                </div>
            </article>
            @include('components.details', [
                'difficulty' => 'Beginner Friendly',
                'duration' => 6,
                'lessons' => 12,
                'bookmarked' => false,
                'liked' => true,
                'likes' => 256
            ])
        </x-title-card>
        <div class="text-white mt-7">
            <h1 class="font-bold text-lg md:text-xl mb-3">About this syllabus</h1>
            <ul class="list-disc ml-6 text-sm md:text-base">
                <li>Lorem ipsum dolor sit amet.</li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis, a!</li>
                <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque quam dolorum fuga amet? Dolorem, perferendis?</li>
                <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus, reiciendis! Molestiae, eaque?</li>
            </ul>
        </div>
            <!-- More posts... -->
        </div>
    </div>
</div>
    </div>
@endsection
