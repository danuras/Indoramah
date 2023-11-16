<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendEmail;
use App\Models\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SendMessageController extends Controller
{
    public function send(Request $request)
    {
        $email_service = EmailService::select('email_receiver')->first();
        Mail::to($email_service->email_receiver)->send(new SendEmail($request));
        return back()
        ->with('success', 'Email Berhasil Dikirim');
    }
}
