<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Create a post</title>
</head>
<body class="antialiased">
<h2><a href="{{route('posts.index')}}">Go to index page</a></h2>

<form action="{{route('posts.update', $post->id)}}" method="post">
    @csrf
    @method('PUT')
    Title:<input type="text" name="title" value="{{$post->title}}"><br>
    Category:
    <select name="category_id">
        @foreach($categories as $cat)
            <option @if($cat->id == $post->category_id) selected @endif value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach
    </select><br>
    Content:<textarea name="content" cols="30" rows="10" >{{$post->content}}</textarea><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
