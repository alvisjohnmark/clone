<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store()
    {
        //validate
        request()->validate([
            'content' => 'required|min:5|max:300'
        ]);
        //create
        $com = Comment::create([
            'comment' => request()->get('content', ''),
        ]);
        //redirect with flash message
        return redirect()->route('dashboard')->with('success', 'Added successfully');
    }
}