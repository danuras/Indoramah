<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ColorApiController extends Controller
{
    public function createOrUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'header_text_color' => [
                'required',
                'regex:/^#([a-f0-9]{6}|[a-f0-9]{3})$/i'
            ],
            'common_text_color' => [
                'required',
                'regex:/^#([a-f0-9]{6}|[a-f0-9]{3})$/i'
            ],
            'background_color_1' => [
                'required',
                'regex:/^#([a-f0-9]{6}|[a-f0-9]{3})$/i'
            ],
            'background_color_2' => [
                'required',
                'regex:/^#([a-f0-9]{6}|[a-f0-9]{3})$/i'
            ],
            'card_color' => [
                'required',
                'regex:/^#([a-f0-9]{6}|[a-f0-9]{3})$/i'
            ],
            'highlight_color' =>  [
                'required',
                'regex:/^#([a-f0-9]{6}|[a-f0-9]{3})$/i'
            ],
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $color = Color::first();
        if ($color) {
            $color->header_text_color = $request->header_text_color;
            $color->common_text_color = $request->common_text_color;
            $color->background_color_1 = $request->background_color_1;
            $color->background_color_2 = $request->background_color_2;
            $color->card_color = $request->card_color;
            $color->highlight_color = $request->highlight_color;

            if ($color->save() || !$color->isDirty()) {
                return $this->successResponse(null);
            }
            return $this->failResponse(null);
        } else {
            $color = Color::create([
                'header_text_color' => $request->header_text_color,
                'common_text_color' => $request->common_text_color,
                'background_color_1' => $request->background_color_1,
                'background_color_2' => $request->background_color_2,
                'card_color' => $request->card_color,
                'highlight_color' => $request->highlight_color,
            ]);
            if ($color) {
                return $this->successResponse(null);
            }
            return $this->failResponse(null);
        }
    }

    public function show()
    {
        $color = Color::first();
        return $this->successResponse($color);
    }
}
