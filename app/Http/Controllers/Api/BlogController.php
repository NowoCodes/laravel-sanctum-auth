<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\Blog as BlogResource;
use App\Models\Blog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Validator;

class BlogController extends BaseController
{
  public function index(): JsonResponse
  {
    $blogs = Blog::get();

    return $this->sendResponse(BlogResource::collection($blogs), 'Posts fetched.');
  }


  public function store(Request $request): JsonResponse
  {
    $input = $request->all();
    $validator = Validator::make($input, [
      'title' => 'required',
      'description' => 'required'
    ]);

    if ($validator->fails()) {
      return $this->sendError($validator->errors());
    }

    $blog = Blog::create($input);

    return $this->sendResponse(new BlogResource($blog), 'Post created.');
  }


  public function show($id): JsonResponse
  {
    $blog = Blog::find($id);

    if (is_null($blog)) {
      return $this->sendError('Post does not exist.');
    }

    return $this->sendResponse(new BlogResource($blog), 'Post fetched.');
  }


  public function update(Request $request, Blog $blog): JsonResponse
  {
    $input = $request->all();

    $validator = Validator::make($input, [
      'title' => 'required',
      'description' => 'required'
    ]);

    if ($validator->fails()) {
      return $this->sendError($validator->errors());
    }

    $blog->title = $input['title'];
    $blog->description = $input['description'];
    $blog->save();

    return $this->sendResponse(new BlogResource($blog), 'Post updated.');
  }

  public function destroy(Blog $blog): JsonResponse
  {
    $blog->delete();

    return $this->sendResponse([], 'Post deleted.');
  }
}
