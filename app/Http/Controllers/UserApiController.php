<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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
                Password::min(8)
                    ->letters()
                    ->numbers()
                    ->symbols()
                    ->uncompromised(),
                'confirmed',
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

    public function show()
    {
        if (Auth::user()->can('is-primary')) {
            $users = User::get();
            return $this->successResponse($users);
        } else {
            return $this->unauthorized();
        }
    }
}
