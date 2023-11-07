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
                @foreach ($data as $item)
                    <img class="w-7 h-7 rounded-full" src="{{ asset('storage/posted/square/' . $item->photo) }}"
                        alt="{{ $item->username }}">
                @endforeach
                <span class="self-center ml-5 text-2xl font-semibold whitespace-nowrap dark:text-white">Resize
                    Image</span>
            </a>


            <button data-collapse-toggle="navbar-hamburger" type="button"
                class="inline-flex items-center justify-center p-2 w-10 h-10 ml-3 text-sm text-gray-500 rounded-lg  focus:outline-none focus:ring-2  dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-hamburger" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            {{-- <div class="hidden w-full" id="navbar-hamburger">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded dark:bg-blue-600" aria-current="page">Home</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Services</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white">Pricing</a>
              </li>
              <li>
                <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Contact</a>
              </li>
            </ul>
          </div> --}}
        </div>
    </nav>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 container mt-10">
        @foreach ($data as $item)
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/posted/square/' . $item->photo) }}"
                    alt="{{ $item->username }}">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/posted/normal/' . $item->photo) }}"
                    alt="{{ $item->username }}">
            </div>
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/posted/thumbnail/' . $item->photo) }}"
                    alt="{{ $item->username }}">
            </div>
        @endforeach

    </div>


</body>

</html>
