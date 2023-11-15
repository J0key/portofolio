<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class GaleryController extends Controller
{
    public function index()
    {
        return view("galeri.index", [
        ]);
    }

    public function create()
    {
        return view("galeri.create", [
        ]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'photo'=>'image|nullable|max:2048'
        ]);
     

        if ($request->file('photo')) {
            $image = $request->file('photo');
        
            // Generate a unique filename for both images
            $filename = time() . '.' . $image->getClientOriginalExtension();
        
            // Resize the image to your desired dimensions (e.g., 200x200)
            $resizedImage = Image::make($image)->fit(200, 200);
            $thumbnailImage = Image::make($image)->fit(160, 90);
        
            // Define the base path
            $basePath = '/galeri';
        
            // Save the resized image to the storage directory with the same filename
            Storage::put($basePath . '/square/' . $filename, $resizedImage->encode());

            Storage::put($basePath . '/thumbnail/' . $filename,  $thumbnailImage->encode());

        
            // Store the path to the resized image in the $userData array
            $validated['photo'] = $filename; // This path is relative to your public directory
        }


        
        Galeri::create($validated);

        return redirect('/galeri')->with('success', 'Foto berhasil diupdate!');

    }

    public function edit()
    {
        return view("galeri.edit", [
        ]);
    }

    public function update(Request $request, $id)
    {
        return redirect();
    }
}