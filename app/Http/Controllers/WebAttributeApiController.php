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
            'icon' => 'image|mimes:jpeg,png,jpg|max:1024|dimensions:ratio=1/1',
            'background_image' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:width=1950,height=679',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $webAttribute = WebAttribute::first();
        $icon = null;
        if ($request->file('icon')) {
            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/web_attribute/icon/'), $filename);
            $icon = 'images/web_attribute/icon/' . $filename;
        }
        $background_image = null;
        if ($request->file('background_image')) {
            $file = $request->file('background_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/web_attribute/background_image/'), $filename);
            $background_image = 'images/web_attribute/background_image/' . $filename;
        }
        if ($webAttribute) {
            $webAttribute->title = $request->title;
            if ($icon) {
                $webAttribute->icon = $icon;
            }
            $webAttribute->short_description = $request->short_description;
            $webAttribute->long_title = $request->long_title;
            $webAttribute->main_heading = $request->main_heading;
            $webAttribute->sub_heading = $request->sub_heading;
            if ($background_image) {
                $webAttribute->background_image = $background_image;
            }
            if ($webAttribute->save() || !$webAttribute->isDirty()) {
                return $this->successResponse($webAttribute);
            }
            return $this->failResponse(null);
        } else {
            $validator = Validator::make($request->all(), [
                'background_image' => 'required',
                'background_testimonies' => 'required',
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

            $webAttribute = WebAttribute::create([
                'title' => $request->title,
                'icon' => $icon,
                'short_description' => $request->short_description,
                'long_title' => $request->long_title,
                'main_heading' => $request->main_heading,
                'sub_heading' => $request->sub_heading,
                'background_image' => $background_image,
                'background_testimonies' => $background_testimonies,
            ]);
            if ($webAttribute) {
                return $this->successResponse($webAttribute);
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
