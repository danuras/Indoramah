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
            'image_url' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=1/1',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $image_url = null;
        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/advantage/image_url/'), $filename);
            $image_url = 'images/advantage/image_url/' . $filename;
        }
        $contact = Advantage::first();
        if ($contact) {
            $contact->title = $request->title;
            $contact->description = $request->description;
            if ($image_url) {
                $contact->image_url = $image_url;
            }
            if ($contact->save() || !$contact->isDirty()) {
                return $this->successResponse($contact);
            }
            return $this->failResponse(null);
        } else {
            $validator = Validator::make($request->all(), [
                'image_url' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $contact = Advantage::create([
                'title' => $request->title,
                'description' => $request->description,
                'image_url' => $image_url,
            ]);
            if ($contact) {
                return $this->successResponse($contact);
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
