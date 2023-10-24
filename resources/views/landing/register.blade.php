    @extends('landing.nav')

    @section('image')
    <div class="w-1/4 bg-blue-200 hidden h-screen md:flex flex-auto flex-col items-end justify-end overflow-hidden bg-no-repeat bg-contain bg-center"
    style="background-image: url(img/gua3.png);">
    <div class="bg-slate-200 opacity-25 inset-0 z-0"></div>

</div>
    @endsection
    @section('form')
        <div class="lg:text-left text-center">
            <div class="flex items-center justify-end ">
                <div class="bg-black flex flex-col w-80 border border-gray-900 rounded-lg px-8 py-10">
                    <form class="flex flex-col space-y-8 mt-2" action="/register" method="POST">
                    @csrf
                        <label for="title" class="font-bold text-white text-center text-2xl">Sign Up</label>

                        <label class="font-bold text-lg text-white " for="username">Username</label>
                        <input type="text" name="username" placeholder="e.g Mikhael"
                            class="border rounded-lg py-3 px-3 mt-4 bg-black border-white placeholder-white-500 text-white">

                        <label class="font-bold text-lg text-white">Email</label>
                        <input type="email" name="email" placeholder="e.g. aaa@gmail.com"
                            class="border rounded-lg py-3 px-3 bg-black border-white placeholder-white-500 text-white">

                        <label class="font-bold text-lg text-white ">Password</label>
                        <input type="password" name="password" placeholder="*****"
                            class="border rounded-lg py-3 px-3 mt-4 bg-black border-white placeholder-white-500 text-white">
                        <button name="submit" type="submit" class="border border-white bg-black text-white rounded-lg py-3 font-semibold">Register</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
