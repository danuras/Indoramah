<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogApiController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'date_published' => 'required',
            'author' => 'required',
            'text' => 'required',
            'link' => 'required',
            'image_url' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'image_url.dimensions' => 'Rasio gambar harus 16:9', // Pesan kustom untuk validasi rasio gambar
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }
        $file = $request->file('image_url');
        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('images/blogs/image_url/'), $filename);
        $image_url = 'images/blogs/image_url/' . $filename;

        $blog = Blog::create([
            'title' => $request->title,
            'date_published' => $request->date_published,
            'author' => $request->author,
            'text' => $request->text,
            'link' => $request->link,
            'image_url' => $image_url,
        ]);
        if ($blog) {
            return $this->successResponse($blog);
        }
        return $this->failResponse(null);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'blog_id' => 'required',
            'title' => 'required',
            'date_published' => 'required',
            'author' => 'required',
            'text' => 'required',
            'link' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg|max:2048|dimensions:ratio=16/9',
        ], [
            'image_url.dimensions' => 'Rasio gambar harus 16:9', // Pesan kustom untuk validasi rasio gambar
        ]);
        if ($validator->fails()) {
            return $this->requestKurang($validator->errors());
        }

        $blog = Blog::find($request->blog_id);
        $image_url = null;
        if ($request->file('image_url')) {
            $file = $request->file('image_url');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('images/blogs/image_url/'), $filename);
            $image_url = 'images/blogs/image_url/' . $filename;
        }
        $blog->title = $request->title;
        $blog->date_published = $request->date_published;
        $blog->author = $request->author;
        $blog->text = $request->text;
        $blog->link = $request->link;
        if ($image_url) {
            $blog->image_url = $image_url;
        }
        if ($blog->save() || !$blog->isDirty()) {
            return $this->successResponse($blog);
        }
        return $this->failResponse(null);
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        if ($blog->delete()) {
            return $this->successResponse($blog);
        }
        return $this->failResponse(null);
    }

    public function show()
    {
        $blogs = Blog::get();
        return $this->successResponse($blogs);
    }
}
