<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="m-3">
    <header class="h-10 flex justify-end items-center gap-5 md:gap-0 mb-3">
        <div class="w-[69vw] md:w-[50vw] lg:w-[33vw]">
            <div class="bg-[#1f1f1f] rounded-[20px] h-[5vh] flex justify-between items-center overflow-hidden">
                <a href="{{route('home')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('home') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full text-sm leading-[4.75vh]">Home</div></a>
                <a href="{{route('about')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('about') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full text-sm leading-[4.75vh]">About</div></a>
                <a href="{{route('learn')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('learn') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full text-sm leading-[4.75vh]">Learn</div></a>
                <a href="{{route('forum')}}" class="w-[25%] h-full"><div class="{{request()->routeIs('forum') ? 'bg-white text-[#0a0a0a]' : 'bg-transparent text-[#a9a9a9] hover:bg-white/[.1]'}} text-center h-full text-sm leading-[4.75vh]">Forum</div></a>
            </div>
        </div>
        <div class="hidden md:block w-[15vw] md:w-[43vw] lg:w-[33vw]">
            <div class="h-9 flex justify-end items-center gap-5">
                <form class="w-[55%] h-[6vh] rounded-[20px] bg-[#1f1f1f] flex items-center lg:w-[20vw] lg:h-[6vh]">
                    <input type="text" class="border-none bg-transparent w-[80%] text-[#a9a9a9] px-5 md:w-[85%] lg:w-[86%]">
                    <button type="submit"><img src="{{asset('MagnifyingGlass.svg')}}" alt="search" class="h-[4vh]"></button>
                </form>
                <img src="{{asset('Bell.svg')}}" alt="Notification" class="h-[6vh]">
                <div class="w-[10%] relative group self-start mt-[0.17rem] flex flex-col items-end">
                    <button class="h-9 flex justify-center items-center"><img src="{{asset('UserCircle.svg')}}" alt="Profile" class="h-[7vh]"></button>
                    <div class="hidden group-hover:flex bg-[#111111] rounded-[8px] w-36 p-3 mt-3 flex-col gap-4 items-start shadow-2xl">
                        <button class="flex items-center gap-3">
                            <p class="text-[#a9a9a9] font-semibold">Profile</p>
                        </button>
                        <form action="{{route('logout')}}" class="flex items-center gap-3" method="POST">
                            @csrf
                            <button type="submit">
                                <p class="text-[#a9a9a9] font-semibold">Logout</p>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-[10vw] relative md:hidden group self-start mt-[0.17rem] flex flex-col items-end">
            <button class="h-9 flex justify-center items-center"><img src="{{asset('HamburgerIcon.svg')}}" alt="Menu" class="w-[65%] sm:w-[50%]"></button>
            <div class="hidden group-hover:flex bg-[#111111] rounded-[8px] w-56 p-3 mt-3 flex-col gap-4 items-start">
                <form class="w-full h-[6vh] rounded-[20px] bg-[#1f1f1f] flex items-center">
                    <input type="text" class="border-none bg-transparent w-[80%] text-[#a9a9a9] px-4 md:w-[85%] lg:w-[86%]">
                    <button type="submit"><img src="{{asset('MagnifyingGlass.svg')}}" alt="search" class="h-[4vh]"></button>
                </form>
                <button class="flex items-center gap-3">
                    <img src="{{asset('Bell.svg')}}" class="h-[6vh]">
                    <p class="text-[#a9a9a9] font-semibold">Notification</p>
                </button>
                <button class="flex items-center gap-3">
                    <img src="{{asset('UserCircle.svg')}}" class="h-[6vh]">
                    <p class="text-[#a9a9a9] font-semibold">Profile</p>
                </button>
                <button class="flex items-center gap-3">
                    <img src="{{asset('Logout.svg')}}" class="h-[6vh] invert">
                    <p class="text-[#a9a9a9] font-semibold">Logout</p>
                </button>
            </div>
        </div>
    </header>
    <div class="rounded-[8px] bg-gradient-to-b from-[#2c2c2c] to-[#0a0a0a]">
        @yield("content")
    </div>
    <footer class="flex justify-between items-center text-[#666] text-xs mt-7">
        <div><a href="#privacy-policy" class="hover:text-[#999]">Privacy Policy</a> | <a href="#terms-and-conditions" class="hover:text-[#999]">Terms and Conditions</a>&ensp;&#169; 2024 CyRoad Indonesia</div>
        <div class="flex justify-between gap-2 items-center">
            <a href="#linkedin"><img src="{{asset('LinkedinLogo.svg')}}" alt="LinkedIn"></a>
            <a href="#instagram"><img src="{{asset('InstagramLogo.svg')}}" alt="Instagram"></a>
            <a href="#discord"><img src="{{asset('DiscordLogo.svg')}}" alt="Discord"></a>
        </div>
    </footer>
</body>
</html>
