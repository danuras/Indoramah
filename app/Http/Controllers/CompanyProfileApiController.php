<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CompanyProfileApiController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'whatsapp_message' => 'required',
            'mission' => 'required',
            'vission' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg|max:2048|ratio:1/1',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $image_url = null;
        if ($request->file('image_url')) {
            $company_profile = CompanyProfile::first();
            $file = $request->file('image_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/company_profile/image_url/'), $filename);
            $image_url = 'images/company_profile/image_url/' . $filename;
        }
        if ($company_profile) {
            $company_profile->title = $request->title;
            $company_profile->description = $request->description;
            $company_profile->whatsapp_message = $request->whatsapp_message;
            $company_profile->mission = $request->mission;
            $company_profile->vission = $request->vission;
            if ($image_url) {
                $company_profile->image_url = $image_url;
            }

            if ($company_profile->save() || !$company_profile->isDirty()) {
                return $this->successResponse($company_profile);
            }
            return $this->failResponse(null);
        } else {
            $validator = Validator::make($request->all(), [
                'image_url' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $company_profile = CompanyProfile::create([
                'title' => $request->title,
                'description' => $request->description,
                'whatsapp_message' => $request->whatsapp_message,
                'mission' => $request->mission,
                'vission' => $request->vission,
                'image_url' => $image_url,
            ]);
            if ($company_profile) {
                return $this->successResponse($company_profile);
            }
            return $this->failResponse(null);
        }
    }

    public function show()
    {
        $company_profile = CompanyProfile::first();
        return $this->successResponse($company_profile);
    }
}
