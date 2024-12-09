@extends("layouts.app")

@section("title", "Forum Detail")

@section('content')
    <div class="py-6 px-10">
        <div class="flex gap-2 items-start text-white">
            <a class="rounded-full px-3 pt-3 text-white shadow-sm self-start" href="{{ url()->previous() }}">
                <img src="{{asset('CaretUp.svg')}}" alt="Back" class="rotate-[270deg]">
            </a>
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
        <div class="flex justify-evenly mt-4 gap-10 px-2">
            <div class="flex items-center gap-1">
                <img src="{{asset('ChatCircle.svg')}}" alt="Comment" class="w-8">
                <p class="text-[#666666] text-base">15K</p>
            </div>
            <div class="flex items-center gap-1">
                <img src="{{asset('Prohibit.svg')}}" alt="Report" class="w-8">
            </div>
        </div>

        <!-- Comment Form (Initially Hidden) -->
        <div x-show="showForm" class="mt-4">
            <form action="{{ route('comment.store', ['forumId' => $forum->id, 'commentId' => null]) }}" method="POST" class="flex flex-col gap-3" enctype="multipart/form-data" id="comment-form">
                @csrf
                <h1 class="text-white text-2xl">Comment</h1>
                <textarea
                    name="content"
                    id="comment"
                    placeholder="Hello comment right here you hacker..."
                    class="resize-none h-32 p-2 rounded-md bg-gray-200 dark:bg-gray-700 text-black dark:text-white"
                ></textarea>
                <div class="flex flex-row">
                    <button
                        type="submit"
                        id="post-btn">
                        <a href="#course-presec" class="flex items-end text-xs lg:text-sm font-medium border border-white px-4 py-1 rounded-[16px] hover:border-[#a9a9a9] hover:text-[#a9a9a9] w-full"><p class="hidden lg:block text-white text-center w-full">Comment!</p></a>
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

    </div>
</div>

@if($comments->count() > 0)
    <h1 class="text-2xl text-white font-semibold mt-4">Comments</h1>
    <div class="comments-section mt-6">
        @foreach($comments as $comment)
            <div class="comment bg-gray-800 text-white p-4 rounded-lg mb-4">
                <!-- Comment Header -->
                <div class="flex items-center mb-2">
                    <div class="bg-gray-700 rounded-full w-10 h-10 flex items-center justify-center mr-3">
                        <span class="text-xl">👤</span>
                    </div>
                    <div>
                        <p class="font-semibold">{{ $comment->user->username ?? 'Anonymous' }}</p>
                        <p class="text-sm text-gray-400">{{ $comment->created_at->diffForHumans() }}</p>
                    </div>
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
</div>

<div class="mt-10">
{{ $comments->links() }} <!-- This will generate pagination links -->
</div>
</div>
    </div>
        {{-- 

                        <!-- Comment Form (Initially Hidden) -->
                        <div x-show="showForm" class="mt-4">
                            <form action="{{ route('comment.store', ['forumId' => $forum->id, 'commentId' => null]) }}" method="POST" class="flex flex-col gap-3" enctype="multipart/form-data" id="comment-form">
                                @csrf
                                <h1 class="text-white text-2xl">Comment</h1>
                                <textarea
                                    name="content"
                                    id="comment"
                                    placeholder="Hello comment right here you hacker..."
                                    class="resize-none h-32 p-2 rounded-md bg-gray-200 dark:bg-gray-700 text-black dark:text-white"
                                ></textarea>
                                <div class="flex flex-row">
                                    <button
                                        type="submit"
                                        id="post-btn">
                                        <a href="#course-presec" class="flex items-end text-xs lg:text-sm font-medium border border-white px-4 py-1 rounded-[16px] hover:border-[#a9a9a9] hover:text-[#a9a9a9]"><p class="hidden lg:block">Comment! &nbsp;</p><img src="" class="w-4 lg:w-5"></a>
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

                    </div>
                </div>

                @if($comments->count() > 0)
                    <h1 class="text-2xl text-white font-semibold mt-4">Comments</h1>
                    <div class="comments-section mt-6">
                        @foreach($comments as $comment)
                            <div class="comment bg-gray-800 text-white p-4 rounded-lg mb-4">
                                <!-- Comment Header -->
                                <div class="flex items-center mb-2">
                                    <div class="bg-gray-700 rounded-full w-10 h-10 flex items-center justify-center mr-3">
                                        <span class="text-xl">👤</span>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $comment->user->username ?? 'Anonymous' }}</p>
                                        <p class="text-sm text-gray-400">{{ $comment->created_at->diffForHumans() }}</p>
                                    </div>
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
            </div>

            <div class="mt-10">
                {{ $comments->links() }} <!-- This will generate pagination links -->
            </div>
        </div> --}}
    </div>

@endsection