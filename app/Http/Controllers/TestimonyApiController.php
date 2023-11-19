<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TestimonyApiController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'value' => 'required',
            'name' => 'required',
            'job' => 'required',
            'photo_profile' => 'required|image|mimes:jpeg,png,jpg|max:2048|ratio:1/1',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $file = $request->file('photo_profile');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/testimonies/photo_profile/'), $filename);
        $photo_profile = 'images/testimonies/photo_profile/' . $filename;

        $testimony = Testimony::create([
            'value' => $request->value,
            'name' => $request->name,
            'job' => $request->job,
            'photo_profile' => $photo_profile,
        ]);
        if ($testimony) {
            return $this->successResponse($testimony);
        }
        return $this->failResponse(null);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'testimony_id' => 'required',
            'value' => 'required',
            'name' => 'required',
            'job' => 'required',
            'photo_profile' => 'image|mimes:jpeg,png,jpg|max:2048|ratio:1/1',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        $testimony = Testimony::find($request->testimony_id);

        $photo_profile = null;
        if ($photo_profile) {
            $file = $request->file('photo_profile');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/testimonies/photo_profile/'), $filename);
            $photo_profile = 'images/testimonies/photo_profile/' . $filename;
        }

        $testimony->value = $request->value;
        $testimony->name = $request->name;
        $testimony->job = $request->job;
        if ($photo_profile) {
            $testimony->photo_profile = $photo_profile;
        }

        if ($testimony->save() || !$testimony->isDirty()) {
            return $this->successResponse($testimony);
        }
        return $this->failResponse(null);
    }

    public function delete($id)
    {
        $testimony = Testimony::find($id);
        if ($testimony->delete()) {
            return $this->successResponse($testimony);
        }
        return $this->failResponse(null);
    }

    public function show()
    {
        $testimonies = Testimony::get();
        return $this->successResponse($testimonies);
    }
}
