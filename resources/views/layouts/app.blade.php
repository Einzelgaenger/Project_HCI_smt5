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
    <header class="h-10 flex justify-end items-center gap-0 mb-3">
        <div class="w-[33vw]">
            <div class="bg-[#1f1f1f] rounded-[20px] h-[5vh] flex justify-between items-center overflow-hidden">
                <a href="{{route('home')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('home') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full text-sm leading-[4.75vh]">Home</div></a>
                <a href="{{route('about')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('about') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full text-sm leading-[4.75vh]">About</div></a>
                <a href="{{route('learn')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('learn') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full text-sm leading-[4.75vh]">Learn</div></a>
                <a href="{{route('forum')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('forum') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full text-sm leading-[4.75vh]">Forum</div></a>
            </div>
        </div>
        <div class="w-[33vw]">
            <div class="h-9 flex justify-end items-center gap-5">
                <form class="w-[20vw] h-[6vh] rounded-[20px] bg-[#1f1f1f] flex items-center">
                    <input type="text" class="border-none bg-transparent w-[86%] text-[#a9a9a9] px-5">
                    <button type="submit"><img src="MagnifyingGlass.svg" alt="search" class="h-[4vh]"></button>
                </form>
                <img src="Bell.svg" alt="Notification" class="h-[6vh]">
                <img src="UserCircle.svg" alt="Profile" class="h-[7vh]">
            </div>
        </div>
    </header>
    <div class="rounded-[8px] bg-gradient-to-b from-[#2c2c2c] to-[#0a0a0a]">
        @yield("content")
    </div>
    <footer class="flex justify-between items-center text-[#666] mt-7">
        <div><a href="#privacy-policy" class="hover:text-[#999]">Privacy Policy</a> | <a href="#terms-and-conditions" class="hover:text-[#999]">Terms and Conditions</a>&ensp;&#169; 2024 CyRoad Indonesia</div>
        <div class="flex justify-between gap-2 items-center">
            <a href="#linkedin"><img src="LinkedinLogo.svg" alt="LinkedIn"></a>
            <a href="#instagram"><img src="InstagramLogo.svg" alt="Instagram"></a>
            <a href="#discord"><img src="DiscordLogo.svg" alt="Discord"></a>
        </div>
    </footer>
</body>
</html>
