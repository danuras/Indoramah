<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdvantageApiController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048|ratio:1/1',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $contact = Advantage::first();
        $file = $request->file('image_url');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/advantage/image_url/'), $filename);
        $image_url = 'images/advantage/image_url/' . $filename;
        if ($contact) {
            $contact->title = $request->title;
            $contact->description = $request->description;
            $contact->image_url = $image_url;

            if ($contact->save() || !$contact->isDirty()) {
                return $this->successResponse(null);
            }
            return $this->failResponse(null);
        } else {
            $contact = Advantage::create([
                'title' => $request->title,
                'description' => $request->description,
                'image_url' => $image_url,
            ]);
            if ($contact) {
                return $this->successResponse(null);
            }
            return $this->failResponse(null);
        }
    }

    public function show()
    {
        $contact = Advantage::first();
        return $this->successResponse($contact);
    }
}
