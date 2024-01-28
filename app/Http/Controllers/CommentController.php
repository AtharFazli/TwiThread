<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Alert;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'comment'       => 'required|max:150'
        ],
        [
            'comment.max'   => 'Maksimal 150 karakter'
        ]
    );

    Comment::create([
        'user_id'   => $request->user()->id,
        'post_id'   => $request->post_id,
        'comment'   => $request->comment
    ]);


    return to_route('content.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('landing.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'comment'       => 'required|max:150'
        ],
        [
            'comment.max'   => 'Maksimal 150 karakter'
        ]
    );

    $comment->update([
        'comment' => $request->comment
    ]);

    return to_route('content.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        alert()->success('Dihapus', 'Komen berhasil dihapus !');

        return to_route('content.index');
    }
}
