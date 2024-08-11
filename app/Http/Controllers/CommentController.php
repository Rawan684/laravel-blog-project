<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;
use App\Models\Comment;


class CommentController extends Controller
{
    public function store(Request $request, $slug)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $post = Post::where('slug', $slug)->firstOrfail();
        $userId = Auth::id();
        $comment = new Comment;
        $comment->body = $request->body;
        $comment->post()->associate($post);
        $comment->user_id = $userId;
        $comment->save();

        return redirect('/blog/' . $slug)->with('comment', ' Your comment has been sent successfully.');
    }
}
