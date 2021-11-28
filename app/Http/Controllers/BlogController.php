<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
  public function index()
  {
    $blogs = Blog::get();

    return view('blog.index', compact('blogs'));
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function show(Blog $blog)
  {
    //
  }

  public function edit(Blog $blog)
  {
    //
  }

  public function update(Request $request, Blog $blog)
  {
    //
  }

  public function destroy(Blog $blog)
  {
    //
  }

  public function showFullBlogPost(Blog $blog)
  {
    return view('blog.single-blogpost', compact('blog'));
  }
}