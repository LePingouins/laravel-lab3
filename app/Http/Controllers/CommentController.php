<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $postId) {
        $validated = $request->validate([
            'commenter_name' => 'required|string|max:255',
            'comment' => 'required|string',
        ]);
    
        Comment::create([
            'post_id' => $postId,
            'commenter_name' => $validated['commenter_name'],
            'comment' => $validated['comment'],
        ]);
    
        return redirect()->back()->with('success', 'Comment added!');
    }
}
