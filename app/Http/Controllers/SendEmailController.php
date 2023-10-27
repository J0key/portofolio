<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Jobs\SendMailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index()
    {
        return $this->view('landing.register');

    }

    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        dispatch(new SendMailJob($data));

        return redirect()->route('register');
            // ->with('success', 'Email berhasil dikirim');
    }
}
