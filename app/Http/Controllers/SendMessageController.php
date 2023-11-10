<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendMessageController extends Controller
{
    public function send(Request $request)
    {
        Mail::to('podliautometicgate81@gmail.com')->send(new SendEmail($request));
        return back()
        ->with('success', 'Email Berhasil Dikirim');
    }
}
