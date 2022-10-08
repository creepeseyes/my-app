<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Create a post</title>
</head>
<body class="antialiased">
<h2><a href="{{route('posts.index')}}">Go to index page</a></h2>

<form action="{{route('comments.update', $comment->id)}}" method="post">
    @csrf
    @method('PUT')
    Comment: <br>
    <textarea name="comm" cols="30" rows="10" >{{$comment->comm}}</textarea><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
