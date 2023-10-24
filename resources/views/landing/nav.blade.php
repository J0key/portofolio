<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    
    <div class="relative min-h-screen grid bg-slate-200 ">
        <div class="text-white bg-black h-12">
            hdsivh
        </div>
        <div
            class="flex flex-col sm:flex-row bg-slate-200 items-center justify-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 ">
            @yield('image')
            <div
                class="lg:max-w-2xl mt-36 -ml-36 -mr-36 text-4xl opacity-80 text-black font-bold md:max-w-md z-10 items-center text-center ">
                "SHYRA ATHAYA" <br>
                <br>
                <span class="text-lime-600">PORTOFOLIO</span>
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
