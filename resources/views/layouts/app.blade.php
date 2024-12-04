<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    @vite('resources/css/app.css')
</head>
<body class="m-3">
    <header class="h-10 flex justify-between items-center gap-0 mb-3">
        <div class="w-[33vw]"></div>
        <div class="w-[33vw]">
            <div class="bg-[#1f1f1f] rounded-[20px] h-[5vh] flex justify-between items-center overflow-hidden">
                <a href="{{route('home')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('home') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full leading-7">Home</div></a>
                <a href="{{route('about')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('about') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full leading-7">About</div></a>
                <a href="{{route('learn')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('learn') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full leading-7">Learn</div></a>
                <a href="{{route('forum')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('forum') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full leading-7">Forum</div></a>
            </div>
        </div>
        <div class="w-[33vw]">
            <div class="h-9 flex justify-end items-center gap-3">
                <form class="w-[15vw] h-[5vh] rounded-[20px] bg-[#1f1f1f] flex items-center">
                    <input type="text" class="border-none bg-transparent w-[85%] text-white px-4">
                    <button type="submit"><img src="MagnifyingGlass.svg" alt="search" class="h-[3.5vh]"></button>
                </form>
                <img src="Bell.svg" alt="Notification" class="h-[5vh]">
                <img src="UserCircle.svg" alt="Profile" class="h-[6vh]">
            </div>
        </div>
    </header>
    <div class="rounded-[8px] bg-gradient-to-b from-[#2c2c2c] to-[#0a0a0a]">
        @yield("content")
    </div>
    <footer>

    </footer>
</body>
</html>
