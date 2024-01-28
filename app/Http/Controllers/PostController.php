<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Alert;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->level == 'Admin') {
            $posts = Post::orderBy('id', 'asc')->get();
        } else {
            $posts = Post::where('user_id', auth()->user()->id)->oldest('id')->with('user')->get();
        }

        // return $posts;
        
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content'       => 'max:150',
            'gambar'        => 'min:1',
            'gambar.*'      => 'image|mimes:jpeg,png,jpg,gif,jfif|max:2048',
        ],
        [
            'content.max'   => 'Maksimal 150 karakter',
            'gambar.max'    => 'Maksimal 2MB'
        ]
    );

    if ($request->file('gambar')) {
        // $path = $request->file('gambar')->store('Gambar');

        $gambars = $request->file('gambar');
        foreach ($gambars as $gambar) {
            $path = $gambar->store('Gambar');
        }
    }

    Post::create([
        'user_id'   => $request->user()->id,
        'content'   => $request->content,
        'gambar'    => $path ?? null
    ]);

    alert()->success('Post Berhasil', 'Post sudah diunggah');

    return to_route('post.index')->with('success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'content'       => 'max:150',
            'gambar'        => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ],
        [
            'content.max'   => 'Maksimal 150 karakter',
            'gambar.max'    => 'Maksimal 2MB'
        ]
    );

    if ($request->file('gambar')) {

        if ($post->gambar != null) {
            Storage::delete($post->gambar);
        }
        $path = $request->file('gambar')->store('Gambar');
        
    }

    $post->update([
        'user_id'   => $request->user()->id,
        'content'   => $request->content,
        'gambar'    => $path ?? null
    ]);


    return to_route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->gambar);
        $post->delete();

        return to_route('post.index')->with('success');
    }
}
