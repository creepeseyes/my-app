<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function postsByCategory(Category $category){
        return view('posts.index',['posts' => $category->posts, 'categories' => Category::all()]);
    }

    public function index(){
        $allPosts = Post::all();
        return view('posts.index',['posts' => $allPosts, 'categories' => Category::all()]);
    }
    public function create(){
        return view('posts.create', ['categories' => Category::all()]);
    }
    public function store(Request $req){
        Post::create([
            'title' => $req -> input('title'),
            'content' => $req -> input('content'),
            'category_id' => $req -> input('category_id')
        ]);
        return redirect()->route('posts.index');
    }
    public function show(Post $post){
        return view('posts.show', ['post'=>$post, 'comments' => Comment::all()]);
    }


    public function edit(Post $post)
    {
        return view('posts.edit', ['post'=>$post, 'categories' => Category::all()]);
    }


    public function update(Request $request, Post $post)
    {
        $post->update([
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
            'category_id' => $request
                -> input('category_id')
        ]);
        return redirect()->route('posts.index');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
