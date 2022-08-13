<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $id)
    {
        Comment::create([
            'service_id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'content' => $request->content,
        ]);
        return redirect('/');
    }
}
