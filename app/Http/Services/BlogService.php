<?php

namespace App\Http\Services\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogService
{
    // Blog List
    public function index(Request $request)
    {
        $blogs = Blog::with('user')
            ->latest()
            ->get();

        return response()->json([
            'success' => true,
            'data' => $blogs,
        ]);
    }

    // Blog Show
    public function show($id)
    {
        $blog = Blog::with('user')->findOrFail($id);

        return response()->json([
            'success' => true,
            'data' => $blog,
        ]);
    }

    // Blog Store
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'body'    => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $blog = Blog::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Blog created successfully',
            'data' => $blog->load('user'),
        ], 201);
    }

    // Blog Update
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
        ]);

        $blog->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Blog updated successfully',
            'data' => $blog->load('user'),
        ]);
    }

    // Blog Delete
    public function delete($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return response()->json([
            'success' => true,
            'message' => 'Blog deleted successfully',
        ]);
    }
}