@extends('galeri.layouts')
@section('navbar')
<a href="/" class="box-border relative z-30 inline-flex items-center justify-center w-auto px-8 py-3 overflow-hidden font-bold text-white transition-all duration-300 bg-lime-600 rounded-md cursor-pointer group ring-offset-2 ring-1 ring-lime-300 ring-offset-indigo-200 hover:ring-offset-lime-500 ease focus:outline-none">
    <span class="absolute bottom-0 right-0 w-8 h-20 -mb-8 -mr-5 transition-all duration-300 ease-out transform rotate-45 translate-x-1 bg-white opacity-10 group-hover:translate-x-0"></span>
    <span class="absolute top-0 left-0 w-20 h-8 -mt-1 -ml-12 transition-all duration-300 ease-out transform -rotate-45 -translate-x-1 bg-white opacity-10 group-hover:translate-x-0"></span>
    <span class="relative z-20 flex items-center text-sm">
    {{-- <svg class="relative w-5 h-5 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg> --}}
    Back to Mainpage
    </span>
    </a>
@endsection
@section('content')

    <a href="{{ route('galeri.create') }}" class="relative inline-block px-4 py-2 font-medium group m-20">
        <span class="absolute inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
        <span class="absolute inset-0 w-full h-full bg-blue-300 border-2 border-black group-hover:bg-black"></span>
        <span class="relative text-black group-hover:text-white">Create</span>
    </a>


    <div class="min-h-screen py-5">
        @if ($galeri->count()>0)
        <div class='overflow-x-auto w-full'>
            <table class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                <thead class="bg-gray-900">
                    <tr class="text-white text-left">
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Thumbnail </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Square </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($galeri as $galeri)   
                    <tr>
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/galeri/thumbnail/'.$galeri->photo) }}" alt="{{ $galeri->photo }}">
                        </td>
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/galeri/square/'.$galeri->photo) }}" alt="{{ $galeri->photo }}">
                        </td>
                        <td class="px-6 py-4"> 
                            <a href="{{ route('galeri.edit', $galeri->id) }}" class="text-purple-800 hover:underline">Edit</a> 
                            <form action="{{ route('galeri.destroy', $galeri->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-800 hover:underline">Delete</button> 
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @else 
        <h1 class="text-center  text-white text-xl font-bold">Tidak ada Photo</h1>
        @endif
        
    </div>

@endsection
