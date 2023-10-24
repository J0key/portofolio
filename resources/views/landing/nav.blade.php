<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logoatas.png" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@tailwindmade" />
    <link crossorigin="crossorigin" href="https://fonts.gstatic.com" rel="preconnect" />
    <link as="style"
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
        rel="preload" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <title>Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="relative min-h-screen grid bg-black ">
        <div class="z-10 px-8">
            <div class="text-white bg-black h-12 px-8 py-3 flex justify-end border border-black shadow-2xl">
                <li class="group pl-6 list-none">
                    <a href="/login">
                        <span class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">SIGN IN</span>
                        <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                    </a>
                </li>
                <li class="group pl-6 list-none">
                    <a href="/register">
                        <span class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">SIGN UP</span>
                        <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                    </a>
                </li>
            </div>
        </div>

        <div
            class="flex flex-col sm:flex-row bg-black items-center -mt-8 justify-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 ">
            <div class="bg-black h-full hidden md:flex flex-auto flex-col items-start justify-start overflow-hidden bg-no-repeat bg-center bg-contain" style="background-image: url(img/smoke.jpg);">
                <div class="bg-slate-200 opacity-25 inset-0 z-0"></div>
            </div>
            <div
                class="md:flex md:items-center md:justify-left w-full sm:w-auto md:h-full xl:w-1/2 p-8 md:p-10 lg:p-14 sm:rounded-lg md:rounded-none justify-left">
                <div class="max-w-xl w-full space-y-12">
                    @yield('form')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
