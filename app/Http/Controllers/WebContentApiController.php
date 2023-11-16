<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CardBox;
use App\Models\WebContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class WebContentApiController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content_type' => 'required',
            'card_box_id' => 'required',
            'rank' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        
        $web_content = WebContent::create([
            'content_type' => $request->content_type,
            'card_box_id' => $request->card_box_id,
            'rank' => $request->rank,
        ]);
        if ($web_content) {
            return $this->successResponse($web_content);
        }
        return $this->failResponse(null);
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'content_type' => 'required',
            'card_box_id' => 'required',
            'rank' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        
        $web_content = WebContent::first();
        

        $web_content->content_type = $request->content_type;
        $web_content->card_box_id = $request->card_box_id;
        $web_content->rank = $request->rank;

        if ($web_content->save() || !$web_content->isDirty()) {
            return $this->successResponse($web_content);
        }
        return $this->failResponse(null);
    }

    public function delete($id)
    {
        $web_content = WebContent::find($id);
        DB::beginTransaction();
        if($web_content->card_box_id){
            $card_box = CardBox::find($web_content->card_box_id);
            $card_box->delete();
        }
        if ($web_content->delete()) {
            DB::commit();
            return $this->successResponse($web_content);
        }
        DB::rollBack();
        return $this->failResponse(null);
    }

    public function show()
    {
        $web_contents = WebContent::orderBy('rank')->get();
        return $this->successResponse($web_contents);
    }
}
