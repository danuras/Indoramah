<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\CardType;
use App\Models\ContentType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContentTypeApiController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'text' => 'required',
            'card_type_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $card_type = CardType::find($request->card_type_id);
        $card = Card::find($card_type->card_id);
        if ($card->content_type == 'content-1') {
            $validator = Validator::make($request->all(), [
                'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=1/1',
            ], [
                'image_url.dimensions' => 'Rasio gambar harus 1:1', // Pesan kustom untuk validasi rasio gambar
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $file = $request->file('image_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/content_types/image_url/'), $filename);
            $image_url = 'images/content_types/image_url/' . $filename;

            $content_type = ContentType::create([
                'title' => $request->title,
                'text' => $request->text,
                'card_type_id' => $request->card_type_id,
                'image_url' => $image_url,
            ]);

            if ($content_type) {
                return $this->successResponse($content_type);
            }
            return $this->failResponse(null);
        } else if ($card->content_type == 'content-2') {
            $content_type = ContentType::create([
                'title' => $request->title,
                'text' => $request->text,
                'card_type_id' => $request->card_type_id,
            ]);

            if ($content_type) {
                return $this->successResponse($content_type);
            }
            return $this->failResponse(null);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'text' => 'required',
            'content_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        $content_type = ContentType::find($request->content_id);
        $card_type = CardType::find($content_type->card_type_id);
        $card = Card::find($card_type->card_id);

        if ($card->content_type == 'content-1') {
            $validator = Validator::make($request->all(), [
                'image_url' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=1/1',
            ], [
                'image_url.dimensions' => 'Rasio gambar harus 1:1', // Pesan kustom untuk validasi rasio gambar
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $image_url = null;
            if ($request->file('image_url')) {
                $file = $request->file('image_url');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('images/content_types/image_url/'), $filename);
                $image_url = 'images/content_types/image_url/' . $filename;
            }
            $content_type->title = $request->title;
            $content_type->text = $request->text;
            if ($image_url) {
                $content_type->image_url = $image_url;
            }

            if ($content_type->save() || !$content_type->isDirty()) {
                return $this->successResponse($content_type);
            }
            return $this->failResponse(null);
        } else if ($card->content_type == 'content-2') {
            
            $content_type->title = $request->title;
            $content_type->text = $request->text;


            if ($content_type->save() || !$content_type->isDirty()) {
                return $this->successResponse($content_type);
            }
            return $this->failResponse(null);
        }
    }
    public function show($id)
    {
        $content_type = ContentType::find($id);
        return $this->successResponse($content_type);
    }

    public function delete($id)
    {
        $card = ContentType::find($id);
        if ($card->delete()) {
            return $this->successResponse(null);
        }
        return $this->failResponse(null);
    }

}
