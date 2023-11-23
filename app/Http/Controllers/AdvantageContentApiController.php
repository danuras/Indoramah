<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AdvantageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdvantageContentApiController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'text' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=1/1',
        ], [
            'icon.dimensions' => 'Rasio gambar harus 1:1', // Pesan kustom untuk validasi rasio gambar
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $file = $request->file('icon');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/advantage_contents/icon/'), $filename);
        $icon = 'images/advantage_contents/icon/' . $filename;

        $advantage_content = AdvantageContent::create([
            'title' => $request->title,
            'text' => $request->text,
            'icon' => $icon,
        ]);
        if ($advantage_content) {
            return $this->successResponse($advantage_content);
        }
        return $this->failResponse(null);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'advantage_id' => 'required',
            'title' => 'required',
            'text' => 'required',
            'icon' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=1/1',
        ], [
            'image_url.dimensions' => 'Rasio gambar harus 1:1', // Pesan kustom untuk validasi rasio gambar
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        $advantage_content = AdvantageContent::find($request->advantage_id);
        $icon = null;
        if ($request->file('icon')) {
            $file = $request->file('icon');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/advantage_contents/icon/'), $filename);
            $icon = 'images/advantage_contents/icon/' . $filename;
        }
        $advantage_content->title = $request->title;
        $advantage_content->text = $request->text;
        if ($icon) {
            $advantage_content->icon = $icon;
        }
        if ($advantage_content->save() || !$advantage_content->isDirty()) {
            return $this->successResponse($advantage_content);
        }
        return $this->failResponse(null);
    }

    public function delete($id)
    {
        $advantage_content = AdvantageContent::find($id);
        if ($advantage_content->delete()) {
            return $this->successResponse($advantage_content);
        }
        return $this->failResponse(null);
    }

    public function show()
    {
        $advantage_contents = AdvantageContent::get();
        return $this->successResponse($advantage_contents);
    }
}
