<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>Create a post</title>
</head>
<body class="antialiased">
<h2><a href="{{route('posts.index')}}">Go to index page</a></h2>
<form action="{{route('posts.store')}}" method="post">
    @csrf
    Title:<input type="text" name="title"><br>
    <textarea name="content" cols="30" rows="10" ></textarea><br>
    <button type="submit">Create</button>
</form>
</body>
</html>
