<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EmailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class EmailServiceApiController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email_sender' => 'required|email',
            'email_receiver' => 'required|email',
            'password' => 'required',

        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        if ($request->user()->can('is-primary')) {
            $emailService = EmailService::first();
            if ($emailService) {
                $emailService->name = $request->input('name');
                $emailService->email_sender = $request->input('email_sender');
                $emailService->email_receiver = $request->input('email_receiver');
                $emailService->password = $request->input('password');
                if ($emailService->save() || !$emailService->isDirty()) {
                    return $this->successResponse($emailService);
                }
                return $this->failResponse(null);
            } else {
                $emailService = EmailService::create([
                    'name' => $request->input('name'),
                    'email_sender' => $request->input('email_sender'),
                    'email_receiver' => $request->input('email_receiver'),
                    'password' => $request->input('password'),
                ]);
                if ($emailService) {
                    return $this->successResponse($emailService);
                }
                return $this->failResponse(null);

            }
        }
        return $this->unauthorized();
    }

    public function show()
    {
        if (Auth::user()->can('is-primary')) {
            $emailService = EmailService::first();
            return $this->successResponse($emailService);
        }
        return $this->unauthorized();
    }
}
