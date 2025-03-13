<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BlogController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny', Blog::class);  // Check if user is authorized to view any blogs

        // Fetch blogs for the view
        $blogs = Blog::all();  // Or use `latest()` to get the most recent blogs

        // Return the view and pass the blogs to it
        return view('dashboard', compact('blogs')); 
        // $this->authorize('viewAny', Blog::class);
        // $blogs = Blog::all();
        // return response()->json($blogs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Blog::class);
        return response()->json(['message' => 'User is authorized to create a blog']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create', Blog::class);

        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return response()->json($blog);
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $this->authorize('view', $blog);
        return response()->json($blog);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $this->authorize('update', $blog);
        return response()->json($blog);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $this->authorize('update', $blog);

        $blog->update($request->only(['title', 'content']));

        return response()->json($blog);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $this->authorize('delete', $blog);

        $blog->delete();

        return response()->json(['message' => 'Blog deleted successfully']);
    }
}
