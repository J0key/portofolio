<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Portofolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePortofolioRequest;
use App\Http\Requests\UpdatePortofolioRequest;


class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("page.container");
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
            'password'=>'required|min:8'
        ]);

        $validated['password'] = \bcrypt($validated['password']);


        User::create($validated);

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

        // $infologin =[
        //     'email'=> $request->email,
        //     'password'=> $request->password,
        // ];

        // if(Auth::attempt($infologin)){
        //     return 'sukses';
        // }else{
        //     return 'gagal';
        // }

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

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/login');
    }
}
