<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body>
    <div class="flex justify-center items-center py-[5vh] bg-gradient-to-b from-[#2c2c2c] to-[#0a0a0a]">
        <form action="{{route('login')}}" method="post" class="bg-[#121212] rounded-[8px] flex flex-col items-center justify-center gap-[2vh] h-[90vh] w-[60vw] md:w-[40vw] lg:w-[45vw] p-9 md:pt-12 lg:px-28">
            <div class="flex flex-col justify-center items-center">
                <img src="User.svg" alt="" class="h-[5vmax] md:h-[4vmax] lg:h-[3vmax]">
                <h3 class="text-white font-semibold text-[4.5vh] lg:text-[6vh] text-center">Log in to Website</h3>
            </div>
            <div class="flex flex-col gap-[3vh] w-full">
                <div class="flex flex-col w-full gap-1">
                    <label for="email" class="text-white w-full font-semibold">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" class="w-full bg-transparent border-[0.5vw] md:border-[0.4vw] border-[#b3b3b3] lg:border-[0.3vw] 2xl:border-[0.2vw] rounded-md h-12 p-2">
                </div>
                <div class="flex flex-col w-full gap-1">
                    <label for="pass" class="text-white w-full font-semibold">Password</label>
                    <input type="password" id="pass" name="password" placeholder="Password" class="w-full bg-transparent border-[0.5vw] md:border-[0.4vw] border-[#b3b3b3] lg:border-[0.3vw] 2xl:border-[0.2vw] rounded-md h-12 p-2">
                </div>
                <button type="submit" class="bg-[#84c8ff] rounded-full h-[7vh] font-semibold md:font-bold mt-4">Log in</button>
                <a href="" class="text-center text-white font-semibold underline">Forgot your password?</a>
                <p class="text-center text-white font-semibold">Don't have an account?&ensp;<a href="{{route('viewRegister')}}" class="text-center text-white font-semibold underline">Sign up for free!</a></p>
            </div>
        </form>
    </div>
</body>
</html>
