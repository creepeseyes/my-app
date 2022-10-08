<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Post;

class CommentController extends Controller
{
    public function store(Request $request){
        Comment::create([
            'comm' => $request -> input('comm'),
            'post_id' => $request -> input('post_id'),
        ]);
        return Redirect::back();
    }

    public function edit(Comment $comment)
    {
        return view('posts.comments.edit', ['comment'=>$comment]);
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->update([
            'comm'=>$request->input('comm'),
        ]);
        return redirect()->to('posts/'.$comment->post_id);
    }

    public function destroy(Comment $comment){
        $comment->delete();
        return Redirect::back();
    }
}
