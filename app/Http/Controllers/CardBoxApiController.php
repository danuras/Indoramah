<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CardBox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CardBoxApiController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_type' => 'required',
            'title' => 'required',
            'info' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        $card_box = CardBox::create([
            'card_type' => $request->card_type,
            'title' => $request->title,
            'info' => $request->info,
        ]);
        if ($card_box) {
            return $this->successResponse($card_box);
        }
        return $this->failResponse(null);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'card_box_id' => 'required',
            'title' => 'required',
            'info' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        $card_box = CardBox::find($request->card_box_id);

        $card_box->title = $request->title;
        $card_box->info = $request->info;

        if ($card_box->save() || !$card_box->isDirty()) {
            return $this->successResponse($card_box);
        }
        return $this->failResponse(null);
    }

    public function show($id)
    {
        $card_box = CardBox::find($id);
        return $this->successResponse([
            'card_box' => $card_box,
            'cards' => $card_box->cards,
        ]);
    }
}
