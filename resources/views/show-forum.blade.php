@extends("layouts.app")

@section("title", "Forum Detail")

@section('content')
    <div class="py-12 px-10">
        <div class="flex gap-2 items-start text-white px-5">
            <img src="{{asset('UserCircle.svg')}}" class="w-12">
            <div>
                <div class="flex gap-2 text-lg w-full">
                    <h3 class="font-medium max-w-32 truncate">{{ $forum->user->name }}</h3>
                    <h3 class="text-[#666666]">•</h3>
                    <h3 class="text-[#666666]">{{$forum->created_at->translatedFormat('M j')}}</h3>
                </div>
                <p class="line-clamp-4 text-base">{!! nl2br(e($forum->content)) !!}</p>
            </div>
        </div>
        <div class="flex justify-evenly mt-9 gap-10 px-2">
            <button class="flex gap-1 items-center text-[#999999]" onclick="">
                <span class="like-count mt-1"><img src={{asset("HeartE.svg")}} alt="like" class="invert"></span> <span class="like-count-number">12</span>
            </button>
            <div class="flex items-center gap-2">
                <img src="{{asset('ChatCircle.svg')}}" alt="Comment" class="w-8 invert">
                <p class="text-[#999999]">{{$forum->comment->count() > 999999 ? (int)($forum->comment->count()/1000000).'M' : ($forum->comment->count() > 999 ? (int)($forum->comment->count()/1000).'K' : $forum->comment->count())}}</p>
            </div>
            <div class="flex items-center gap-2">
                <img src="{{asset('Prohibit.svg')}}" alt="Report" class="w-8 invert">
                <p class="text-[#999999]">Report</p>
            </div>
        </div>

        <div x-show="showForm" class="mt-4">
            <form action="{{ route('comment.store', ['forumId' => $forum->id, 'commentId' => null]) }}" method="POST" class="flex flex-col gap-3" enctype="multipart/form-data" id="comment-form">
                @csrf
                <h1 class="text-white text-2xl">Comment</h1>
                <textarea
                    name="content"
                    id="comment"
                    placeholder="Hello comment right here you hacker..."
                    class="resize-none h-32 p-2 rounded-md text-white bg-transparent border-white border placeholder:text-[#A9A9A9]"
                ></textarea>
                <div class="flex flex-row">
                    <button
                        type="submit"
                        id="post-btn">
                        <a href="#course-presec" class="flex items-end text-xs lg:text-sm font-medium border border-white px-5 py-2 rounded-[16px] hover:border-[#a9a9a9] hover:text-[#a9a9a9] w-full"><p class="text-white text-center w-full">Comment!</p></a>
                    </button>
                </div>
            </form>
        </div>

        @if(session('errors'))
            <script>
                alert("{{ session('errors') }}");
            </script>
        @endif

        @if($errors->any())
            <script>
                alert("{{ implode(' ', $errors->all()) }}");
            </script>
        @endif


        @if($comments->count() > 0)
        <h1 class="text-2xl text-white font-semibold mt-4">Comments</h1>
        <div class="comments-section mt-6">
                @foreach($comments as $comment)
                    <div class="comment text-white p-4 rounded-b-lg mb-8 border-b border-s border-white">
                        <!-- Comment Header -->
                        <div class="flex items-center mb-2">
                            <img src="{{asset('UserCircle.svg')}}" class="w-12 mr-2">
                            <h3 class="font-medium mr-4">{{ $comment->user->username ?? 'Anonymous' }}</h3>
                            <h3 class="text-[#666666] mr-2">•</h3>
                            <h3 class="text-[#666666]">{{ $comment->created_at->diffForHumans() }}</h3>
                        </div>

                        <!-- Comment Content -->
                        <div class="comment-content text-gray-300 text-sm sm:text-base">
                            {{ $comment->content }}
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="mt-4">
            {{ $comments->links() }} <!-- This will generate pagination links -->
        </div>
    {{-- </div> --}}

        <div class="mt-10">
            {{ $comments->links() }} <!-- This will generate pagination links -->
        </div>
    </div>
@endsection
