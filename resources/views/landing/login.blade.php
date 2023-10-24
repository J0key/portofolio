@extends('landing.nav')

@section('form')
<div class="lg:text-left text-center">
    <div class="flex items-center justify-end ">
      <div class="bg-black flex flex-col w-80 border border-gray-900 rounded-lg px-8 py-10">
            @if (session('success'))
            <div id="successDiv" class="p-4 mb-4 text-sm  text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                <span class="font-medium">Success!</span> {{ session('success') }}
              </div>
            @endif
            <form class="flex flex-col space-y-8 mt-2" action="/login" method="POST">
                @csrf
                <label for="title" class="font-bold text-white text-center text-2xl">Sign In</label>
                <label class="font-bold text-lg text-white " >Username</label> 
                <input type="text" name="username" placeholder="e.g. Mikhael" class="border rounded-lg py-3 px-3 mt-4 bg-black border-white placeholder-white-500 text-white">

                <label class="font-bold text-lg text-white" for="password" >Password</label> 
                <input type="password" name="password" placeholder="******" class="border rounded-lg py-3 px-3 mt-4 bg-black border-white placeholder-white-500 text-white">
                
                    <button name="submit" type="submit" class="border border-white bg-black text-white rounded-lg py-3 font-semibold">Login</button>
            </form>
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
@endsection


