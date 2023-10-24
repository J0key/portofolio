@extends('landing.nav')

@section('form')
    <div class="lg:text-left text-center">
        <div class="flex items-center justify-end ">
            <div class="bg-black flex flex-col w-80 border border-lime-600 rounded-lg px-8 py-10">
                <form class="flex flex-col space-y-8" action="/register" method="POST">
                    @csrf
                    <label for="title" class="font-bold text-white text-center text-2xl">Sign Up</label>

                    <label class="font-bold text-lg text-white " for="username">Username</label>
                    <input type="text" name="username" placeholder="e.g Mikhael"
                        class="border rounded-lg py-3 px-3  bg-black border-white placeholder-white-500 text-white">

                    <label class="font-bold text-lg text-white">Email</label>
                    <input type="email" name="email" placeholder="e.g. aaa@gmail.com"
                        class="border rounded-lg py-3 px-3 bg-black border-white placeholder-white-500 text-white">

                    <label class="font-bold text-lg text-white ">Password</label>
                    <input type="password" name="password" placeholder="*****"
                        class="border rounded-lg py-3 px-3  bg-black border-white placeholder-white-500 text-white">
                    <button name="submit" type="submit"
                        class="border border-white bg-black text-white rounded-lg py-3 font-semibold">Register</button>
                </form>
            </div>
        </div>
    </div>
@endsection



