<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SocialMediaApiController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $socialMedia = SocialMedia::first();
        if ($socialMedia) {
            $socialMedia->facebook = $request->facebook;
            $socialMedia->twitter = $request->twitter;
            $socialMedia->linkedin = $request->linkedin;
            $socialMedia->instagram = $request->instagram;
            $socialMedia->google_plus = $request->google_plus;
            $socialMedia->youtube = $request->youtube;
            if ($socialMedia->save() || !$socialMedia->isDirty()) {
                return $this->successResponse($socialMedia);
            }
            return $this->failResponse(null);
        } else {
            $socialMedia = SocialMedia::create([
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'google_plus' => $request->google_plus,
                'youtube' => $request->youtube,
            ]);
            if ($socialMedia) {
                return $this->successResponse($socialMedia);
            }
            return $this->failResponse(null);
        }
    }

    public function show()
    {
        $company_profile = SocialMedia::first();
        return $this->successResponse($company_profile);
    }
}
