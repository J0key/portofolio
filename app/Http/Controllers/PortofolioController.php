<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\SendEmail;
use App\Jobs\SendMailJob;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePortofolioRequest;
use App\Http\Requests\UpdatePortofolioRequest;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("page.container" , [
            'data' => Auth::user(),

        ]);

    }

    public function image(){
        return view("landing.imageres" , [
            'data' => User::all(),
        ]);
    }


    public function register()
    {
        return view("landing.register");
    }

    public function masuk()
    {
        return view("landing.login");
    }

    public function store(Request $request){
        $validated = $request->validate([
            'email'=>'required|email|unique:users',
            'username'=>'required|min:5',
            'password'=>'required|min:8',
            'photo'=>'image|nullable|max:2048'
        ]);

        $userData = [
            'username' => $request['username'],
            'email' => $request['email'],
        ];

        $validated['password'] = \bcrypt($validated['password']);

        if ($request->file('photo')) {
            $image = $request->file('photo');
        
            // Generate a unique filename for both images
            $filename = time() . '.' . $image->getClientOriginalExtension();
        
            // Resize the image to your desired dimensions (e.g., 200x200)
            $resizedImage = Image::make($image)->fit(200, 200);
            $thumbnailImage = Image::make($image)->fit(160, 90);
        
            // Define the base path
            $basePath = '/posted';
        
            // Save the resized image to the storage directory with the same filename
            Storage::put($basePath . '/square/' . $filename, $resizedImage->encode());
        
            // Save the original image to the storage directory with the same filename
            Storage::put($basePath . '/normal/' . $filename, file_get_contents($image));

            Storage::put($basePath . '/thumbnail/' . $filename,  $thumbnailImage->encode());

        
            // Store the path to the resized image in the $userData array
            $validated['photo'] = $filename; // This path is relative to your public directory
        }


        User::create($validated);
        dispatch(new SendMailJob($userData));

        return redirect('/login')->with('success', 'Berhasil register, silahkan login');

    }

    public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ],[
            'username.required'=> 'Username wajib diisi',
            'password.required'=> 'Password wajib diisi',
        ]);

        $credintials = [
            "username"=>$request['username'],
            "password"=>$request['password']
        ];

        if (Auth::attempt($credintials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/')->with('succes', 'Berhasil Login');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');  
    }

    public function create(){
        return view("landing.edit");
    }

    // public function edit($id){
    //     return view("landing.edit" , [
    //         'data' => User::find($id),

    //     ]);
    // }

    public function edit($id){
        $data = User::find($id);

        return view('landing.edit' , compact('data'));
    }
    


    public function update(Request $request, $id){
        $validated = $request->validate([
            'email'=>'required|email',
            'username'=>'required|min:5',
            // 'password'=>'required|min:8',
            'image'=>'image|nullable|max:2048'
        ]);


        $userData = [
            'username' => $request['username'],
            'email' => $request['email'],
        ];

        // $validated['password'] = \bcrypt($validated['password']);


        $data = User::findOrFail($id);

        $data->username = $request->username;
        $data->email = $request->email;

        if($request->file('image')){
            if ($request->oldImage) {
                // dd($request->file('image'));
                Storage::delete('posted/normal/' . $request->oldImage);
                Storage::delete('posted/square/' . $request->oldImage);
                Storage::delete('posted/thumbnail/' . $request->oldImage);
            }

            if ($request->file('image')) {
                $image = $request->file('image');
            
                // Generate a unique filename for both images
                $filename = time() . '.' . $image->getClientOriginalExtension();
            
                // Resize the image to your desired dimensions (e.g., 200x200)
                $resizedImage = Image::make($image)->fit(200, 200);
                $thumbnailImage = Image::make($image)->fit(160, 90);
            
                // Define the base path
                $basePath = '/posted';
            
                // Save the resized image to the storage directory with the same filename
                Storage::put($basePath . '/square/' . $filename, $resizedImage->encode());
            
                // Save the original image to the storage directory with the same filename
                Storage::put($basePath . '/normal/' . $filename, file_get_contents($image));

                Storage::put($basePath . '/thumbnail/' . $filename, $thumbnailImage->encode());

            
                // Store the path to the resized image in the $userData array
                $validated['photo'] = $filename; // This path is relative to your public directory
            }
            $data->photo = $validated['photo'];

            $data->save();

            // User::where('id' , $id)
            // ->update($validated);

            // return print("berhasil");
            return redirect('/')->with('success', 'Berhasil Login');
        }
    }


    // public function update(Request $request, $id){
    //     $request->validate([
    //         'name' => 'required|string|max:250',
    //         'email' => 'required|email',
    //         'photo' => 'image|nullable|max:1999'
    //     ]);
    //     // dd($request->all());
    //     $user = User::findOrFail($id);
    //     // check apakah image is uploaded
    //     if ($request->hasFile('photo')){
    //         // upload  new image
    //         $image = $request->file('photo');
    //         $filenameWithExt = $request->file('photo')->getClientOriginalName();
    //         $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    //         $extension = $request->file('photo')->getClientOriginalExtension();
    //         $filenameSimpan = $filename . '_' . time() . '.' . $extension;
    //         $basePath = '/updated';
    //         $path = $request->file('photo')->storeAs($basePath . '/updatepPhoto/'. $filenameSimpan , file_get_contents($image));
           

    //         //delete old image
    //         // dd(public_path().''.$user->photo);
    //         Storage::delete('storage/posted/normal/'.$user->photo);

    //         //update post with new image
    //         $user->update([
    //             'name'      => $request->name,
    //             'email'     => $request->email,
    //             'photo'     => $filenameSimpan
    //         ]);
    //     } else {
    //         //update user without photo
    //         $user->update([
    //             'name'      => $request->name,
    //             'email'     => $request->email,
    //         ]);
    //     }
    //     //redirect to dashboard
    //     return redirect()->route('/')->with(['message' => 'Data Berhasil Diubah!']);
    // }




    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
}
