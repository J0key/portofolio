@extends('landing.nav')

@section('form')
    <div class="lg:text-left text-center">
        <div class="flex items-center justify-end ">
            <div class="bg-black flex flex-col w-80 border border-lime-600 rounded-lg px-8 py-10">
                
                <form class="flex flex-col space-y-8" action="/register" method="POST">
                    @csrf

                    @if ($errors->any())
                    <div class="pt-3">
                        <div id="fail" class="p-4 mb-4 text-sm  text-red-500 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                            <ul>
                                @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    <label for="title" class="font-bold text-white text-center text-2xl">Sign Up</label>

                    <label class="font-bold text-lg text-white " for="username">Username</label>
                    <input type="text" name="username" placeholder="e.g Mikhael"
                        class="border rounded-lg py-3 px-3  bg-black hover:border-lime-600 border-white placeholder-white-500 text-white">

                    <label class="font-bold text-lg text-white">Email</label>
                    <input type="email" name="email" placeholder="e.g. aaa@gmail.com"
                        class="border rounded-lg py-3 px-3 bg-black hover:border-lime-600 border-white placeholder-white-500 text-white">

                    <label class="font-bold text-lg text-white ">Password</label>
                    <input type="password" name="password" placeholder="*****"
                        class="border rounded-lg py-3 px-3  bg-black border-white hover:border-lime-600 placeholder-white-500 text-white">
                    <button name="submit" type="submit"
                        class="border border-white bg-black text-white hover:border-lime-600 rounded-lg py-3 font-semibold">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Get a reference to the div element
        var fail = document.getElementById('fail');
    
        // Remove the div after 3 seconds (3000 milliseconds)
        setTimeout(function() {
            if (fail) {
                fail.remove();
            }
        }, 1300);
    </script>
@endsection
