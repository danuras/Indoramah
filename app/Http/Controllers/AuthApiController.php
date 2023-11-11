<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\SendEmailVerification;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Password;

class AuthApiController extends Controller
{
    // otentikasi user
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)->first();
        if (Hash::check($password, $user->password)) {
            $apiToken = $user->createToken('auth_token')->plainTextToken;

            return $this->successResponse([
                'user' => $user,
                'api_token' => $apiToken,
            ]);
        }
        return $this->failResponse(null);
    }
    // logout dari satu device
    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return $this->successResponse(null);
    }
    // logout semua device
    public function logoutAllDevice()
    {
        Auth::user()->tokens()->delete();
        return $this->successResponse(null);
    }

    // mulai lupa password
    public function requestForgetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $user = User::where('email', $request->input('email'))->first();
        /* if ($user->token_expired_at < Carbon::now() || $user->token_expired_at == null) { */
            $token = Str::random(6);
            $user->token = Hash::make($token);
            $user->token_expired_at = Carbon::now()->addMinutes(5);

            if ($user->save()) {
                Mail::to($request->input('email'))->send(new SendEmailVerification($token));
                return $this->successResponse($user);
            }
            return $this->failResponse($user);
       // }

        $diff = Carbon::createFromFormat('Y-m-d H:i:s', $user->token_expired_at)->diff(Carbon::now());
        return response()->json([
            'success' => false,
            'message' => 'Tunggu sampai ' . $diff->format('%i menit, %s detik') . ' lagi untuk mengirimkan kode verifikasi',
            'data' => '',
        ], 402);
    }
    // mengirimkan email berisi kode verifikasi
    public function sendTokenVerification(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();
        if ($user->token_expired_at < Carbon::now()) {
            $token = Str::random(6);
            $user->token = Hash::make($token);
            $user->token_expired_at = Carbon::now()->addMinutes(5);

            if ($user->save()) {
                Mail::to($request->input('email'))->send(new SendEmailVerification($token));
                return $this->successResponse($user);
            }
            return $this->failResponse($user);
        }
        $diff = Carbon::createFromFormat('Y-m-d H:i:s', $user->token_expired_at)->diff(Carbon::now());
        return response()->json([
            'success' => false,
            'message' => 'Tunggu sampai ' . $diff->format('%i menit, %s detik') . ' lagi untuk mengirimkan kode verifikasi',
            'data' => '',
        ], 402);
    }

    // Mengganti password
    public function verifyUpdatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|exists:users,email',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $user = User::where('email', $request->input('email'))->first();
        if (Hash::check($request->input('token'), $user->token) && $user->token_expired_at >= Carbon::now()) {
            $validator = Validator::make($request->all(), [
                'password' => [
                    'required',
                    'string',
                    Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                        ->uncompromised(),
                    'confirmed',

                ],
                'password_confirmation' => [
                    'required',
                ],
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $user->password = Hash::make($request->input('password'));


            if ($user->save()) {
                return $this->successResponse($user);
            }
            return $this->failResponse($user);
        } else if (Hash::check($request->input('token'), $user->token) && $user->token_expired_at <= Carbon::now()) {
            return $this->requestKurang([
                'conde' => ['Token Kadaluarsa']
            ]);
        } else {
            return $this->requestKurang(['code' => ['Token Salah']]);
        }
    }


}
