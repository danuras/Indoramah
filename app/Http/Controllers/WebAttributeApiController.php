<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\WebAttribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class WebAttributeApiController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'short_description' => 'required',
            'long_title' => 'required',
            'main_heading' => 'required',
            'sub_heading' => 'required',
            'background_image' => 'required|image|mimes:jpeg,png,jpg|max:2048|ratio:1950/679',
            'background_testimonies' => 'required|image|mimes:jpeg,png,jpg|max:2048|ratio:1950/512',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $webAttribute = WebAttribute::first();
        $icon = null;
        if ($request->file('icon')) {
            $validator = Validator::make($request->all(), [
                'icon' => 'image|mimes:jpeg,png,jpg|max:1024|ratio:1/1',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/web_attribute/icon/'), $filename);
            $icon = 'images/web_attribute/icon/' . $filename;
        }
        $validator = Validator::make($request->all(), [
            'icon' => 'image|mimes:jpeg,png,jpg|max:1024',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        $file = $request->file('background_image');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/web_attribute/background_image/'), $filename);
        $background_image = 'images/web_attribute/background_image/' . $filename;

        $file = $request->file('background_testimonies');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/web_attribute/background_testimonies/'), $filename);
        $background_testimonies = 'images/web_attribute/background_testimonies/' . $filename;

        if ($webAttribute) {
            $webAttribute->title = $request->title;
            $webAttribute->icon = $request->icon;
            $webAttribute->short_description = $request->short_description;
            $webAttribute->long_title = $request->long_title;
            $webAttribute->main_heading = $request->main_heading;
            $webAttribute->sub_heading = $request->sub_heading;
            $webAttribute->background_image = $background_image;
            $webAttribute->background_testimonies = $background_testimonies;

            if ($webAttribute->save() || !$webAttribute->isDirty()) {
                return $this->successResponse(null);
            }
            return $this->failResponse(null);
        } else {
            $webAttribute = WebAttribute::create([
                'title' => $request->title,
                'icon' => $request->icon,
                'short_description' => $request->short_description,
                'long_title' => $request->long_title,
                'main_heading' => $request->main_heading,
                'sub_heading' => $request->sub_heading,
                'background_image' => $background_image,
                'background_testimonies' => $background_testimonies,
            ]);
            if ($webAttribute) {
                return $this->successResponse(null);
            }
            return $this->failResponse(null);
        }
    }

    public function show()
    {
        $webAttribute = WebAttribute::first();
        return $this->successResponse($webAttribute);
    }
}
