<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
</head>
<body class="flex justify-center items-center my-[5vh]">
    <form action="" method="post" class="flex flex-col gap-[2vh] w-[60vw] md:w-[40vw] lg:w-[45vw] p-9 md:pt-12 lg:px-20">
        <div class="flex flex-col justify-center items-center">
            <img src="User.svg" alt="" class="h-[5vmax] md:h-[4vmax] lg:h-[3vmax]">
            <h3 class="text-white font-semibold text-[4.5vh] lg:text-[6vh] text-center">Sign up an Account</h3>
        </div>
        <div class="flex flex-col gap-[3vh] w-full mt-2">
            <div class="flex flex-col w-full gap-1">
                <label for="username" class="text-white w-full font-semibold">Username</label>
                <input type="text" id="username" placeholder="Username" class="w-full bg-transparent border-[0.5vw] md:border-[0.4vw] border-[#b3b3b3] lg:border-[0.3vw] 2xl:border-[0.2vw] rounded-md h-12 p-2">
            </div>
            <div class="flex flex-col w-full gap-1">
                <label for="name" class="text-white w-full font-semibold">Name</label>
                <input type="text" id="name" placeholder="Name" class="w-full bg-transparent border-[0.5vw] md:border-[0.4vw] border-[#b3b3b3] lg:border-[0.3vw] 2xl:border-[0.2vw] rounded-md h-12 p-2">
            </div>
            <div class="flex flex-col w-full gap-1">
                <label for="email" class="text-white w-full font-semibold">Email</label>
                <input type="email" id="email" placeholder="Email" class="w-full bg-transparent border-[0.5vw] md:border-[0.4vw] border-[#b3b3b3] lg:border-[0.3vw] 2xl:border-[0.2vw] rounded-md h-12 p-2">
            </div>
            <div class="flex flex-col w-full gap-1">
                <label for="pass" class="text-white w-full font-semibold">Password</label>
                <input type="password" id="pass" placeholder="Password" class="w-full bg-transparent border-[0.5vw] md:border-[0.4vw] border-[#b3b3b3] lg:border-[0.3vw] 2xl:border-[0.2vw] rounded-md h-12 p-2">
            </div>
            <button type="submit" class="bg-[#84c8ff] rounded-full h-[7vh] font-semibold md:font-bold mt-4">Sign up</button>

            <p class="text-center text-white font-semibold">Already registered?&ensp;<a href="" class="text-center text-white font-semibold underline">Login now!</a></p>
        </div>

    </form>
</body>
</html>
