<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
            'name'       => 'required|max:100',
            'email'      => 'required|email',
            'comment'    => 'required|min:5',
        ]);

        Comment::create([
            'article_id' => $request->article_id,
            'name'       => $request->name,
            'email'      => $request->email,
            'comment'    => $request->comment,
        ]);

        return back()->with('success', 'Komentar berhasil dikirim.');
    }
}