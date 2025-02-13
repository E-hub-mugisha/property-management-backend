<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    // Fetch all blogs
    public function index()
    {
        return response()->json(Blog::all());
    }

    // Store new blog
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|string',
            'alt' => 'nullable|string',
            'link' => 'required|string',
            'property' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'author_name' => 'required|string',
            'author_avatar' => 'required|string',
            'posted_on' => 'required|date',
        ]);

        $blog = Blog::create($request->all());

        return response()->json(['message' => 'Blog created successfully', 'blog' => $blog], 201);
    }

    // Fetch single blog
    public function show($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        return response()->json($blog);
    }

    // Update blog
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        $blog->update($request->all());

        return response()->json(['message' => 'Blog updated successfully', 'blog' => $blog]);
    }

    // Delete blog
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return response()->json(['message' => 'Blog not found'], 404);
        }

        $blog->delete();

        return response()->json(['message' => 'Blog deleted successfully']);
    }
}
