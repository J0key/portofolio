@extends('landing.nav')

@section('form')
    <div class="lg:text-left text-center">
        <div class="flex items-center justify-end ">
            <div class="bg-black flex flex-col w-80 border border-lime-600 rounded-lg px-8 py-10">

                <form class="flex flex-col space-y-8" action="/register" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="pt-3">
                            <div class="bg-red-500 text-white font-semibold px-4 py-2 rounded-md" id="fail">
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

                    <label class="font-bold text-lg text-white" for="photo">Profile Photo</label>
                    <input name="photo"
                        class="block w-4/5 mb-5 text-sm text-lime-600 bg-white rounded-lg cursor-pointer dark:text-lime-600 focus:outline-none dark:bg-lime-700 dark:border-lime-600 dark:placeholder-lime-400"
                        id="default_size" type="file" onchange="previewImage(event)">
                    <div id="image-preview"></div>

                    <button name="submit" type="submit"
                        class="border border-white bg-black text-white hover:border-lime-600 rounded-lg py-3 font-semibold">Register</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const imagePreview = document.getElementById("image-preview");

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.innerHTML =
                        `<img src="${e.target.result}" alt="Preview" style="max-width: 100%; max-height: 200px;">`;
                };

                reader.readAsDataURL(input.files[0]);
            } else {
                imagePreview.innerHTML = "";
            }
        }
    </script>

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
