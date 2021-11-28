<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return Inertia::render('Blogs/Index', [
            'blogs' => Blog::latest()->paginate(10),
        ]);
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
        return Inertia::render('Blogs/Show', [
            'blog' => $blog,
        ]);
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
}