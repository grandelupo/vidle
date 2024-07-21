<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'content' => 'required',
            'video_id' => 'required'
        ]);

        $user = auth()->user();
        $request->merge(['user_id' => $user->id]);

        Comment::create($request->all());

        return redirect()->back()
            ->with('success', 'Comment created successfully.');
    }

    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'content' => 'required',
            'video_id' => 'required',
            'user_id' => 'required',
        ]);

        $comment->update($request->all());

        return redirect()->route('comments.index')
            ->with('success', 'Comment updated successfully');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comments.index')
            ->with('success', 'Comment deleted successfully');
    }

    public function showComments($id)
    {
        $comments = Comment::where('video_id', $id)->get();
        return view('comments.index', compact('comments'));
    }

    public function showCommentsByUser($id)
    {
        $comments = Comment::where('user_id', $id)->get();
        return view('comments.index', compact('comments'));
    }

    public function showCommentsByVideo($id)
    {
        $comments = Comment::where('video_id', $id)->get();
        return view('comments.index', compact('comments'));
    }
}
