<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

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
</head>

<body>
    {{-- yang paling atas ditampilin== yang paling bawah --}}
    
    @extends('page.end')
    @extends('page.work')
    @extends('page.skill')
    @extends('page.about')
    @extends('page.nav')




</body>

</html>
