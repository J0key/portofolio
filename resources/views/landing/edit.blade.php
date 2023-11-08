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
    <link rel="stylesheet" href="{{ asset('build/assets/app-c83c9c39.css') }}">


</head>

<body>
    <div class="relative min-h-screen grid bg-black ">


        <div
            class="flex flex-col sm:flex-row bg-black items-center -mt-8 justify-center md:items-start sm:justify-center md:justify-start flex-auto min-w-0 ">
            <div class="bg-black h-full hidden md:flex flex-auto flex-col items-start justify-start overflow-hidden bg-no-repeat bg-center bg-contain"
                style="background-image: url(img/smoke.jpg);">
                <div class="bg-slate-200 opacity-25 inset-0 z-0"></div>
            </div>
            <div
                class="md:flex md:items-center md:justify-left w-full sm:w-auto md:h-full xl:w-1/2 p-8 md:p-10 lg:p-14 sm:rounded-lg md:rounded-none justify-left">
                <div class="max-w-xl w-full space-y-12">
                    <div class="lg:text-left text-center">
                        <div class="flex items-center justify-end ">
                            <div class="bg-black flex flex-col w-80 border border-lime-600 rounded-lg px-8 py-10">

                                <form class="flex flex-col space-y-8" action="{{ route('update', $data->id)}}" method="POST" 
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                    @if ($errors->any())
                                        <div class="pt-3">
                                            <div class="bg-red-500 text-white font-semibold px-4 py-2 rounded-md"
                                                id="fail">
                                                <ul>
                                                    @foreach ($errors->all() as $item)
                                                        <li>{{ $item }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    @endif

                                    <label for="title" class="font-bold text-white text-center text-2xl">Edit
                                        Data</label>

                                    <label class="font-bold text-lg text-white " for="username">Username</label>
                                    <input type="text" name="username" placeholder="e.g Mikhael" value='{{ old('username', $data->username) }}'
                                        class="border rounded-lg py-3 px-3  bg-black hover:border-lime-600 border-white placeholder-white-500 text-white">

                                    <label class="font-bold text-lg text-white">Email</label>
                                    <input type="email" name="email" placeholder="e.g. aaa@gmail.com" value='{{ old('email', $data->email) }}'
                                        class="border rounded-lg py-3 px-3 bg-black hover:border-lime-600 border-white placeholder-white-500 text-white">

                                    {{-- <label class="font-bold text-lg text-white ">Password</label>
                                    <input type="password" name="password" placeholder="*****" 
                                        class="border rounded-lg py-3 px-3  bg-black border-white hover:border-lime-600 placeholder-white-500 text-white"> --}}

                                        <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Image</label>
                                        <input type="hidden" name="oldImage" value="{{ $data->photo }}">
                                        @if ($data->photo)
                                        <img src="{{ asset('storage/posted/normal/'.$data->photo) }}" class="img-preview max-h-[300px] mb-5">
                                        @else
                                        <img class="img-preview max-h-[300px] mb-5">
                                        @endif
                                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="image" name="image" type="file" onchange="previewImage()">
                                        <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>

                                    <button name="submit" type="submit"
                                        class="border border-white bg-black text-white hover:border-lime-600 rounded-lg py-3 font-semibold">Edit
                                        Photo</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <script>
                        // function previewImage(event) {
                        //     const input = event.target;
                        //     const imagePreview = document.getElementById("image-preview");

                        //     if (input.files && input.files[0]) {
                        //         const reader = new FileReader();

                        //         reader.onload = function(e) {
                        //             imagePreview.innerHTML =
                        //                 `<img src="${e.target.result}" alt="Preview" style="max-width: 100%; max-height: 200px;">`;
                        //         };

                        //         reader.readAsDataURL(input.files[0]);
                        //     } else {
                        //         imagePreview.innerHTML = "";
                        //     }
                        // }

                        function previewImage(){
                            const image = document.querySelector('#image')
                            const imgPreview = document.querySelector('.img-preview')

                            imgPreview.style.display = 'block'

                            const oFReader = new FileReader()
                            oFReader.readAsDataURL(image.files[0]);
                            
                            oFReader.onload = function(oFREvent){
                                imgPreview.src = oFREvent.target.result
                            };
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
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('build\assets\app-422dbcc3.js') }}"></script>
</body>

</html>
