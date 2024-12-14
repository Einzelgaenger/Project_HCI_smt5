@extends("layouts.app")

@section("title", "Forum")

@section('content')
<div class="container mx-auto p-6 py-10 text-white">
    <form action="{{route('storeForum')}}" method="POST">
        @csrf
        <div class="bg-[#0B0B0B] shadow-2xl rounded-xl p-5">
            <div class="mb-5">
                <div class="relative">
                    <input name="content" type="text" id="commentInput" placeholder="Write a comment . . ."  class="placeholder:text-2xl xl:text-xl h-32 mt-1 block w-full border-x-0 border-t-0 border-b border-gray-600 p-2 bg-transparent" onfocus="hidePlaceholder()" onblur="showPlaceholder()">
                </div>
            </div>
            <div class="flex justify-between mb-3">
                <div class="flex justify-end">
                    <button class="bg-[#84C8FF] text-black font-semibold px-6 py-2 rounded-[22px]" type="submit" onclick="addComment()">Post</button>
                </div>
            </div>
        </div>
    </form>
    <div class="flex flex-col-reverse gap-10 my-10">
        @foreach ($forums as $item)
        <div id="commentsSection">
            <div class="flex items-center mb-2 gap-2">
                <img src="{{asset('UserCircle.svg')}}" class="w-12">
                <div class="flex gap-2 text-lg xl:text-xl w-full">
                    <h3 class="font-medium max-w-32 truncate">{{$item->user->username}}</h3>
                    <h3 class="text-[#666666]">•</h3>
                    <h3 class="text-[#666666]">{{$item->created_at->translatedFormat('m/d/Y, g:i A', '12/9/2024, 9:59 AM')}}</h3>
                </div>
            </div>
            <div class="comment-text xl:text-lg">{{$item->content}}</div>
            <div class="flex gap-8 my-4 items-center">
                <button class="flex gap-1 items-center text-[#999999]" onclick="">
                    <span class="like-count mt-1"><img src="{{asset('HeartE.svg')}}" alt="like" class="invert"></span> <span class="like-count-number"></span>
                </button>
                <button class="flex gap-1 items-center text-[#999999]" onclick="location.href = '{{route('forum.show', $item->id)}}'">
                    <span class="reply-count mt-1"><img src="{{asset('ChatCircle.svg')}}" alt="reply" class="invert"></span> <span class="reply-count-number">{{$item->comment->count() > 999999 ? (int)($item->comment->count()/1000000).'M' : ($item->comment->count() > 999 ? (int)($item->comment->count()/1000).'K' : $item->comment->count())}}</span>
                </button>
                <button onclick=""><img src="{{asset('Prohibit.svg')}}" alt="report" class="invert"></button>
            </div>
        </div>
        @endforeach
    </div>


@endsection
