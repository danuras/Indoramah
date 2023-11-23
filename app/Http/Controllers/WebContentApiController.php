<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\AdvantageContent;
use App\Models\Blog;
use App\Models\CardBox;
use App\Models\Contact;
use App\Models\Testimony;
use App\Models\WebAttribute;
use App\Models\WebContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class WebContentApiController extends Controller
{
    public function createCard(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rank' => 'required',
            'card_type' => 'required',
            'title' => 'required',
            'info' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        DB::beginTransaction();
        $card_box = CardBox::create([
            'card_type' => $request->card_type,
            'title' => $request->title,
            'info' => $request->info,
        ]);
        $iwc = DB::table('web_contents')
            ->where('rank', '>=', $request->rank)
            ->increment('rank');
        $web_content = WebContent::create([
            'content_type' => 'card',
            'card_box_id' => $card_box->id,
            'rank' => $request->rank,
        ]);


        if ($web_content && $card_box) {
            DB::commit();
            $web_contents = WebContent::leftJoin('card_boxes', 'card_boxes.id', '=', 'web_contents.card_box_id', )->select('web_contents.id', 'web_contents.rank', 'web_contents.card_box_id', 'web_contents.content_type', 'card_boxes.card_type', 'card_boxes.title')->where('web_contents.id', $web_content->id)->first();
            return $this->successResponse($web_contents);
        }
        DB::rollBack();
        return $this->failResponse(null);
    }

    public function createAdvantage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rank' => 'required',
            'description' => 'required',
            'title' => 'required',
            'image_url' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048', 'dimensions:ratio=1/1'],
        ], [
            'image_url.dimensions' => 'Rasio gambar harus 1:1', // Pesan kustom untuk validasi rasio gambar
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        DB::beginTransaction();

        $file = $request->file('image_url');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/advantage/image_url/'), $filename);
        $image_url = 'images/advantage/image_url/' . $filename;
        $advantage = Advantage::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_url' => $image_url,
        ]);
        $iwc = DB::table('web_contents')
            ->where('rank', '>=', $request->rank)
            ->increment('rank');

        $web_content = WebContent::create([
            'content_type' => 'advantage',
            'rank' => $request->rank,
        ]);


        if ($web_content && $advantage) {
            $web_contents = WebContent::leftJoin('card_boxes', 'card_boxes.id', '=', 'web_contents.card_box_id', )->select('web_contents.id', 'web_contents.rank', 'web_contents.card_box_id', 'web_contents.content_type', 'card_boxes.card_type', 'card_boxes.title')->where('web_contents.id', $web_content->id)->first();
            DB::commit();
            return $this->successResponse($web_contents);
        }
        DB::rollBack();
    }


    public function createMaps(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rank' => 'required',
            'info_location' => 'required',
            'embeded_map_url' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        DB::beginTransaction();
        $contact = Contact::first();
        $contact->info_location = $request->info_location;
        $contact->embeded_map_url = $request->embeded_map_url;

        $iwc = DB::table('web_contents')
            ->where('rank', '>=', $request->rank)
            ->increment('rank');
        $web_content = WebContent::create([
            'content_type' => 'maps',
            'rank' => $request->rank,
        ]);

        if ($web_content && $contact->save()) {
            $web_contents = WebContent::leftJoin('card_boxes', 'card_boxes.id', '=', 'web_contents.card_box_id', )->select('web_contents.id', 'web_contents.rank', 'web_contents.card_box_id', 'web_contents.content_type', 'card_boxes.card_type', 'card_boxes.title')->where('web_contents.id', $web_content->id)->first();
            DB::commit();
            return $this->successResponse($web_contents);
        }
        DB::rollBack();
    }

    public function createTestimony(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rank' => 'required',
            'value' => 'required',
            'photo_profile' => 'required|image|mimes:jpeg,png,jpg|max:1024|dimensions:ratio=1/1',
            'name' => 'required',
            'job' => 'required',
            'background_testimonies' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:width=1950,height=512',
        ], [
            'background_testimonies.dimensions' => 'Ukuran gambar yang dibolehkan adalah 1950x512 piksel', // Pesan kustom untuk validasi rasio gambar
            'photo_profile.dimenstions' => 'Rasio gambar harus 1:1'
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        DB::beginTransaction();
        $file = $request->file('background_testimonies');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/web_attribute/background_testimonies/'), $filename);
        $background_testimonies = 'images/web_attribute/background_testimonies/' . $filename;


        $file = $request->file('photo_profile');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/testimony/photo_profile/'), $filename);
        $photo_profile = 'images/testimony/photo_profile/' . $filename;

        $web_attribute = WebAttribute::first();
        $web_attribute->background_testimonies = $background_testimonies;

        $testimony = Testimony::create([
            'value' => $request->value,
            'name' => $request->name,
            'job' => $request->job,
            'photo_profile' => $photo_profile,
        ]);
        $iwc = DB::table('web_contents')
            ->where('rank', '>=', $request->rank)
            ->increment('rank');

        $web_content = WebContent::create([
            'content_type' => 'testimony',
            'rank' => $request->rank,
        ]);

        if ($web_content && $testimony && $web_attribute->save()) {
            $web_contents = WebContent::leftJoin('card_boxes', 'card_boxes.id', '=', 'web_contents.card_box_id', )->select('web_contents.id', 'web_contents.rank', 'web_contents.card_box_id', 'web_contents.content_type', 'card_boxes.card_type', 'card_boxes.title')->where('web_contents.id', $web_content->id)->first();
            DB::commit();
            return $this->successResponse($web_contents);
        }
        DB::rollBack();
    }

    public function createBlog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'rank' => 'required',
            'title' => 'required',
            'date_published' => 'required',
            'author' => 'required',
            'text' => 'required',
            'link' => 'required',
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=16/9',
        ], [
            'image_url.dimensions' => 'Rasio gambar harus 16:9',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        DB::beginTransaction();
        $file = $request->file('image_url');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/blog/image_url/'), $filename);
        $image_url = 'images/blog/image_url/' . $filename;

        $blog = Blog::create([
            'title' => $request->title,
            'date_published' => $request->date_published,
            'author' => $request->author,
            'text' => $request->text,
            'link' => $request->link,
            'image_url' => $image_url,
        ]);
        $iwc = DB::table('web_contents')
            ->where('rank', '>=', $request->rank)
            ->increment('rank');

        $web_content = WebContent::create([
            'content_type' => 'blog',
            'rank' => $request->rank,
        ]);

        if ($web_content && $blog) {
            $web_contents = WebContent::leftJoin('card_boxes', 'card_boxes.id', '=', 'web_contents.card_box_id', )->select('web_contents.id', 'web_contents.rank', 'web_contents.card_box_id', 'web_contents.content_type', 'card_boxes.card_type', 'card_boxes.title')->where('web_contents.id', $web_content->id)->first();
            DB::commit();
            return $this->successResponse($web_contents);
        }
        DB::rollBack();
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'web_content_id' => 'required',
            'rank' => 'required',
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        $web_content = WebContent::find($request->web_content_id);

        if ($web_content->rank > $request->rank) {
            DB::table('web_contents')
                ->where([
                    ['rank', '<', $web_content->rank],
                    ['rank', '>=', $request->rank],
                ])
                ->increment('rank');
        } else {
            DB::table('web_contents')
                ->where([
                    ['rank', '>', $web_content->rank],
                    ['rank', '<=', $request->rank],
                ])
                ->decrement('rank');
        }
        $web_content->rank = $request->rank;

        if ($web_content->save() || !$web_content->isDirty()) {
            return $this->successResponse($web_content);
        }
        return $this->failResponse(null);
    }

    public function deleteCard($id)
    {

        $web_content = WebContent::find($id);
        DB::beginTransaction();
        $card_box = CardBox::find($web_content->card_box_id);


        $dwc = DB::table('web_contents')
            ->where('rank', '>', $web_content->rank)
            ->decrement('rank');
        if ($web_content->delete() && $card_box->delete()) {
            DB::commit();
            return $this->successResponse($web_content);
        }
        DB::rollBack();
        return $this->failResponse(null);
    }

    public function deleteAdvantage($id)
    {

        $web_content = WebContent::find($id);
        DB::beginTransaction();

        $a = DB::table('advantages')->delete();
        $ac = DB::table('advantage_contents')->delete();

        $dwc = DB::table('web_contents')
            ->where('rank', '>', $web_content->rank)
            ->decrement('rank');
        if ($web_content->delete()) {
            DB::commit();
            return $this->successResponse($web_content);
        }
        DB::rollBack();
        return $this->failResponse(null);
    }   

    public function deleteMaps($id)
    {

        $web_content = WebContent::find($id);
        DB::beginTransaction();

        $contact = Contact::first();
        $contact->info_location = null;
        $contact->embeded_map_url = null;

        $dwc = DB::table('web_contents')
            ->where('rank', '>', $web_content->rank)
            ->decrement('rank');
        if ($web_content->delete() && $contact->save()) {
            DB::commit();
            return $this->successResponse($web_content);
        }
        DB::rollBack();
        return $this->failResponse(null);
    }
    public function deleteTestimony($id)
    {

        $web_content = WebContent::find($id);
        DB::beginTransaction();

        $web_attribute = WebAttribute::first();
        $web_attribute->background_testimonies = null;

        $t = DB::table('testimonies')->delete();

        $dwc = DB::table('web_contents')
            ->where('rank', '>', $web_content->rank)
            ->decrement('rank');
        if ($web_content->delete() && $web_attribute->save()) {
            DB::commit();
            return $this->successResponse($web_content);
        }
        DB::rollBack();
        return $this->failResponse(null);
    }  

    public function deleteBlog($id)
    {

        $web_content = WebContent::find($id);
        DB::beginTransaction();

        $b = DB::table('blogs')->delete();

        $dwc = DB::table('web_contents')
            ->where('rank', '>', $web_content->rank)
            ->decrement('rank');
        if ($web_content->delete()) {
            DB::commit();
            return $this->successResponse($web_content);
        }
        DB::rollBack();
        return $this->failResponse(null);
    }  

    

    public function show()
    {
        $web_contents = WebContent::leftJoin('card_boxes', 'card_boxes.id', '=', 'web_contents.card_box_id', )->select('web_contents.id', 'web_contents.rank', 'web_contents.card_box_id', 'web_contents.content_type', 'card_boxes.card_type', 'card_boxes.title')->orderBy('rank')->get();
        return $this->successResponse($web_contents);
    }
}
