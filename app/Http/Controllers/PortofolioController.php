<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use App\Http\Requests\StorePortofolioRequest;
use App\Http\Requests\UpdatePortofolioRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=> 'Email wajib diisi',
            'password.required'=> 'Password wajib diisi',
        ] );

        $infologin =[
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if(Auth::attempt($infologin)){
            return 'sukses';
        }else{
            return 'gagal';
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePortofolioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Portofolio $portofolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portofolio $portofolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePortofolioRequest $request, Portofolio $portofolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portofolio $portofolio)
    {
        //
    }
}
