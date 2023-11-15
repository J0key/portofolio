 {{-- :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
    class="relative"
    x-data="{ mobileMenu: false }"
  > --}}

 <div id="main" class="relative">
     <div x-data="{
         triggerNavItem(id) {
                 $scroll(id)
             },
             triggerMobileNavItem(id) {
                 mobileMenu = false;
                 this.triggerNavItem(id)
             }
     }">
         <div class="w-full z-50 top-0 py-3 sm:py-5  absolute px-8">
             <div class="container flex items-center justify-end">
                 <div>
                     <a href="/">
                         {{-- <img src="img/logoatas.png" class="w-12 lg:w-12" alt="logo image" /> --}}
                     </a>
                 </div>

                 <div class="hidden lg:block">
                     <ul class="flex items-center">

                         {{-- <li class="group pl-6">
                            <a href="#">
                                <span
                                    class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">Home</span>
                                <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                            </a>
                        </li> --}}

                         <li class="group pl-6">
                             <a href="#about">
                                 <span
                                     class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">About</span>
                                 <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                             </a>
                         </li>

                         <li class="group pl-6">
                             <a href="#skills">
                                 <span
                                     class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">Skills</span>
                                 <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                             </a>
                         </li>

                         <li class="group pl-6">
                             <a href="#work">
                                 <span
                                     class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">Experience</span>
                                 <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                             </a>
                         </li>

                         <li class="group pl-6">
                             <a href="#contact">
                                 <span
                                     class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">Contact</span>
                                 <span class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"></span>
                             </a>
                         </li>

                         <li class="group pl-6">
                             <div class="flex justify-end">
                                 <button id="dropdownButton" data-dropdown-toggle="dropdown"
                                     class="inline-block text-sm p-1.5" type="button">
                                     <img class="w-7 h-7 rounded-full" src="{{ asset("storage/posted/square/".$data->photo) }}" 
                                     alt="{{ $data->username}}">   
                                 </button>
                                 <!-- Dropdown menu -->
                                 <div id="dropdown"
                                     class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 ">
                                     <ul class="py-2" aria-labelledby="dropdownButton">
                                        <li>
                                            <a href="{{ route('edit', $data->id) }}"
                                                class="block px-4 py-2 text-sm text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Update Photo</a>
                                        </li>
                                        <li>
                                            <a href="/galeri"
                                                class="block px-4 py-2 text-sm text-lime-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Gallery</a>
                                        </li>
                                         <li>
                                             <a href="/imageres"
                                                 class="block px-4 py-2 text-sm text-yellow-500 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Resized Image</a>
                                         </li>
                                         <li>
                                             <a href="/logout"
                                                 class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Log out</a>
                                         </li>
                                     </ul>
                                 </div>
                             </div>
                         </li>

                     </ul>
                 </div>

                 <div class="block lg:hidden">
                     <button> <i class="bx bx-menu text-4xl text-white"></i>
                     </button>
                 </div>
             </div>
         </div>

         {{-- <div class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
             :class="{ 'opacity-100 pointer-events-auto': mobileMenu }">
             <div class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3">
                 <button class="absolute top-0 right-0 mt-4 mr-4">
                     <img src="img/icon-close.svg" class="h-10 w-auto" alt="" />
                 </button>

                 <ul class="mt-8 flex flex-col">
                     <li class="py-2">
                         <span class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">About</span>
                     </li>


                     <li class="py-2">
                         <span class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">Blog</span>
                     </li>

                     <li class="py-2">
                         <span class="cursor-pointer pt-0.5 font-header font-bold uppercase text-white">Contact</span>
                     </li>
                 </ul>
             </div>
         </div> --}}


         <div>
             <div class="relative bg-cover bg-center bg-no-repeat py-8 bg-lime-600">
                 @if (session('succes'))
                     <div id="successDiv"
                         class="max-w-sm mt-12 ml-8 p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                         role="alert">
                         <span class="font-medium">Success!</span> {{ session('succes') }}
                     </div>
                 @endif
                 <div class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48">

                     <div class="flex flex-col items-center justify-center lg:flex-row">
                         <div class="rounded-2xl border-none border-primary shadow-2xl">
                             <img src="img/saya.jpg" class="h-96 rounded-2xl sm:h-56" alt="author" />
                         </div>

                         <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
                             <h1
                                 class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl">
                                 Hello, {{ Auth::user()->username }} 👋
                             </h1>
                             <h2
                                 class=" mt-3 text-center font-header text-2xl text-white sm:text-left sm:text-5xl md:text-4xl">
                                 I'm Shyra Athaya
                             </h2>
                             <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
                                 <div class="flex items-center justify-center pl-0 sm:justify-start md:pl-1">
                                     <p class="font-body text-lg uppercase text-white">Let's connect</p>
                                     <div class="hidden sm:block">
                                         <i class="bx bx-chevron-right text-3xl text-yellow"></i>
                                     </div>
                                 </div>
                                 <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
                                     <a href="https://www.linkedin.com/in/shyrath3104/" class="pl-4">
                                         <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
                                     </a>
                                     <a href="https://www.instagram.com/shy.ath/" class="pl-4">
                                         <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <script>
                 // Get a reference to the div element
                 var successDiv = document.getElementById('successDiv');

                 // Remove the div after 3 seconds (3000 milliseconds)
                 setTimeout(function() {
                     if (successDiv) {
                         successDiv.remove();
                     }
                 }, 2000);
             </script>
