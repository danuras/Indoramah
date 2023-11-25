<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\CardType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class CardTypeApiController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content_type' => 'required',
            'whatsapp_message' => 'required',
            'description' => 'required',
            'card_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        DB::beginTransaction();
        $card = Card::find($request->card_id);
        $card->content_type = $request->content_type;
        $card->is_clickable = true;
        $card->save();
        if ($request->content_type == 'content-1') {
            $validator = Validator::make($request->all(), [
                'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=3/2',
                'text' => 'required',
                'title' => 'required',
            ], [
                'image_url.dimensions' => 'Rasio gambar harus 3:2', // Pesan kustom untuk validasi rasio gambar
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }

            $file = $request->file('image_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/card_types/image_url/'), $filename);
            $image_url = 'images/card_types/image_url/' . $filename;

            $card_type = CardType::create([
                'title' => $request->title,
                'sub_content_title' => $request->sub_content_title,
                'whatsapp_message' => $request->whatsapp_message,
                'description' => $request->description,
                'card_id' => $request->card_id,
                'text' => $request->text,
                'image_url' => $image_url,
            ]);
            if ($card_type) {
                DB::commit();
                return $this->successResponse(null);
            }
            DB::rollBack();
            return $this->failResponse(null);
        } else if ($request->content_type == 'content-2') {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $card_type = CardType::create([
                'title' => $request->title,
                'description' => $request->description,
                'sub_content_title' => $request->sub_content_title,
                'whatsapp_message' => $request->whatsapp_message,
                'card_id' => $request->card_id,
            ]);
            if ($card_type) {
                DB::commit();
                return $this->successResponse($card_type);
            }
            DB::rollBack();
            return $this->failResponse(null);
        }
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_type_id' => 'required',
            'description' => 'required',
            'whatsapp_message' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $card_type = CardType::find($request->card_type_id);

        $card = Card::find($card_type->card_id);
        if ($card->content_type == 'content-1') {
            $validator = Validator::make($request->all(), [
                'image_url' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=3/2',
                'text' => 'required',
                'title' => 'required',
            ], [
                'image_url.dimensions' => 'Rasio gambar harus 3:2', // Pesan kustom untuk validasi rasio gambar
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $image_url = null;
            if ($request->file('image_url')) {
                $file = $request->file('image_url');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('images/card_types/image_url/'), $filename);
                $image_url = 'images/card_types/image_url/' . $filename;
            }

            $card_type->title = $request->title;
            $card_type->description = $request->description;
            $card_type->sub_content_title = $request->sub_content_title;
            $card_type->whatsapp_message = $request->whatsapp_message;
            $card_type->text = $request->text;
            if ($image_url) {
                $card_type->image_url = $image_url;
            }
            if ($card_type->save() || !$card_type->isDirty()) {
                DB::commit();
                return $this->successResponse($card_type);
            }
            DB::rollBack();
            return $this->failResponse(null);
        } else if ($card->content_type == 'content-2') {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $card_type->title = $request->title;
            $card_type->description = $request->description;
            $card_type->sub_content_title = $request->sub_content_title;
            $card_type->whatsapp_message = $request->whatsapp_message;

            if ($card_type->save() || !$card_type->isDirty()) {
                return $this->successResponse($card_type);
            }
            return $this->failResponse(null);
        }
    }


    public function show($id)
    {
        $card_type = CardType::where('card_id',$id)->first();
        return $this->successResponse([
            'card_type' => $card_type,
            'content_types' => $card_type->content_types,
        ]);
    }

    public function delete($id)
    {
        DB::beginTransaction();
        $card_type = CardType::find($id);
        $card = Card::find($card_type->card_id);
        $card->content_type = null;
        $card->is_clickable = false;
        if ($card_type->delete() && $card->save()) {
            DB::commit();
            return $this->successResponse($card_type);
        } 
        return $this->failResponse(null);
    }
}
