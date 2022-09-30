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
    Content:<textarea name="content" cols="30" rows="10" >{{$post->content}}</textarea><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
