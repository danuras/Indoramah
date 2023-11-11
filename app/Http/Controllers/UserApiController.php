<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserApiController extends Controller
{
    // daftarkan user baru
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',
                // must be at least 10 characters in length
                'regex:/[a-z]/',
                // must contain at least one lowercase letter
                'regex:/[A-Z]/',
                // must contain at least one uppercase letter
                'regex:/[0-9]/',
                // must contain at least one digit
                'regex:/[@$!%*#?&]/',
                // must contain a special character
            ],
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        if ($request->user()->can('is-primary')) {
            $user = User::create([
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);
            if ($user) {
                return $this->successResponse($user);
            }
            return $this->failResponse(null);
        }
        return $this->unauthorized();
    }
    // menghapus user
    public function delete(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users,email'],
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        if ($request->user()->can('is-primary')) {
            $user = User::where([
                'email' => $request->input('email'),
                'is_primary' => false,
            ])->first();
            if ($user) {
                if ($user->delete()) {
                    return $this->successResponse($user);
                }
            }
            return $this->failResponse(null);
        }
        return $this->unauthorized();
    }

    // mengganti akun utama
    public function changePrimary(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email', 'exists:users,email'],
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        if ($request->user()->can('is-primary')) {
            DB::beginTransaction();
            $user = User::where([
                'email' => $request->input('email'),
                'is_primary' => false,
            ])->first();
            $user_primary = Auth::user();

            $user->is_primary = true;
            $user_primary->is_primary = false;
            if ($user->save() && $user_primary->save()) {
                DB::commit();
                return $this->successResponse($user);
            }
            DB::rollBack();
            return $this->failedResponse(null);
        }
        return $this->unauthorized();
    }
}
