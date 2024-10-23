<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="flex justify-center items-center">
    <form action="" method="post" class="flex flex-col items-center justify-center gap-[2vh] h-[90vh] w-[60vw] md:w-[40vw] lg:w-[35vw] p-9 md:pt-14">
        <div class="flex flex-col justify-center items-center">
            <img src="User.svg" alt="" class="h-[6vmax] md:h-[5vmax] lg:h-[4vmax]">
            <h3 class="text-white font-semibold text-[4.5vh] lg:text-[6vh]">Log in to Website</h3>
        </div>
        <div class="flex flex-col gap-[3vh] w-full">
            <div class="flex flex-col w-full gap-1">
                <label for="email" class="text-white w-full font-semibold">Email</label>
                <input type="text" id="email" placeholder="Email" class="w-full bg-transparent border-[0.5vw] md:border-[0.4vw] border-[#b3b3b3] rounded-md h-12 md:h-14 p-2">
            </div>
            <div class="flex flex-col w-full gap-1">
                <label for="pass" class="text-white w-full font-semibold">Password</label>
                <input type="password" id="pass" placeholder="Password" class="w-full bg-transparent border-[0.5vw] md:border-[0.4vw] border-[#b3b3b3] rounded-md h-12 md:h-14 p-2">
            </div>
            <button type="submit" class="bg-[#84c8ff] rounded-full h-[7vh] font-semibold md:font-bold">Log in</button>
            <a href="" class="text-center text-white font-semibold underline">Forgot your password?</a>
            <span class="flex justify-between text-white">
                <p class="text-center">Don't have an account?</p>
                <a href="" class="text-center font-semibold underline">Sign up for free!</a>
            </span>
        </div>
    </form>
</body>
</html>
