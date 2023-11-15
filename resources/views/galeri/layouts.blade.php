<!DOCTYPE html>
<html lang="en" class="scroll-smooth bg-lime-600">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="Homepage | Atom Template" />
    <meta property="og:locale" content="en_US" />
    <link rel="canonical" href="//" />
    <meta property="og:url" content="//" />
    <link rel="icon" type="image/png" href="img/logoatas.png" />
    <meta name="theme-color" content="#65a30d" />
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
    <link crossorigin="anonymous" href="styles/main.min.css" media="screen" rel="stylesheet" />
    <title>Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('build/assets/app-4f4a373c.css') }}">
</head>

<body>
    <nav class="border-gray-200 bg-gray-900 dark:bg-gray-800 dark:border-gray-700 text-white">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center">
                <img class="w-7 h-7 rounded-full" src="{{ asset('storage/posted/square/' . Auth::user()->photo) }}"
                    alt="{{ Auth::user()->photo }}">
                <span class="self-center ml-5 text-2xl font-semibold whitespace-nowrap dark:text-white">Gallery
                    Image</span>
            </a>

            @yield('navbar')
  

        </div>
    </nav>
    @yield('content')
    


</body>

</html>