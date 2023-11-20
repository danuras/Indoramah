<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\CardBox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CardApiController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_box_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $card_box = CardBox::find($request->card_box_id);
        $card = null;
        if ($card_box->card_type == 'card-1') {
            $validator = Validator::make($request->all(), [
                'text' => 'required',
                'link' => 'required',
                'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=1/1',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $file = $request->file('image_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/blogs/image_url/'), $filename);
            $image_url = 'images/blogs/image_url/' . $filename;

            $card = Card::create([
                'card_box_id' => $request->card_box_id,
                'text' => $request->text,
                'link' => $request->link,
                'image_url' => $image_url,
            ]);
        } else if ($card_box->card_type == 'card-2') {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=3/2',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $file = $request->file('image_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/blogs/image_url/'), $filename);
            $image_url = 'images/blogs/image_url/' . $filename;
            $card = Card::create([
                'card_box_id' => $request->card_box_id,
                'title' => $request->title,
                'image_url' => $image_url,
            ]);
        } else if ($card_box->card_type == 'card-3') {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=1/1',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $file = $request->file('image_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/blogs/image_url/'), $filename);
            $image_url = 'images/blogs/image_url/' . $filename;
            $card = Card::create([
                'card_box_id' => $request->card_box_id,
                'title' => $request->title,
                'image_url' => $image_url,
            ]);
        }
        if ($card) {
            return $this->successResponse($card);
        }
        return $this->failResponse(null);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_id' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $card = Card::find($request->card_id);
        $card_box = CardBox::find($card->card_box_id);
        if ($card_box->card_type == 'card-1') {
            $validator = Validator::make($request->all(), [
                'text' => 'required',
                'link' => 'required',
                'image_url' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=1/1',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $image_url = null;
            if ($request->file('image_url')) {
                $file = $request->file('image_url');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('images/blogs/image_url/'), $filename);
                $image_url = 'images/blogs/image_url/' . $filename;
            }
            $card->text = $request->text;
            $card->link = $request->link;
            if ($image_url) {
                $card->image_url = $image_url;
            }
        } else if ($card_box->card_type == 'card-2') {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'image_url' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=3/2',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $image_url = null;
            if ($request->file('image_url')) {
                $file = $request->file('image_url');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('images/blogs/image_url/'), $filename);
                $image_url = 'images/blogs/image_url/' . $filename;
            }
            $card->title = $request->title;
            if ($image_url) {
                $card->image_url = $image_url;
            }
        } else if ($card_box->card_type == 'card-3') {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'image_url' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=1/1',
            ]);
            if ($validator->fails()) {
                return $this->requestKurang($validator->errors());
            }
            $image_url = null;
            if ($request->file('image_url')) {
                $file = $request->file('image_url');
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('images/blogs/image_url/'), $filename);
                $image_url = 'images/blogs/image_url/' . $filename;
            }
            $card->title = $request->title;
            if ($image_url) {
                $card->image_url = $image_url;
            }
        }
        if ($card->save() || !$card->isDirty()) {
            return $this->successResponse($card);
        }
        return $this->failResponse(null);
    }

    public function delete($id)
    {
        $card = Card::find($id);
        if ($card->delete()) {
            return $this->successResponse($card);
        }
        return $this->failResponse(null);
    }
}
