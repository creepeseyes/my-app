<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <title>All posts</title>
</head>
<body class="antialiased">

<a href="{{route('posts.index')}}">All posts</a>
@foreach($categories as $cat)
    <a href="{{route('posts.category', $cat->id)}}">{{$cat->name}}</a>
@endforeach

<div>
<h2><a href="{{route('posts.create')}}">Go to create page</a></h2>
</div>

@foreach($posts as $post)

    <a href="{{route('posts.show', $post->id)}}"><h3>{{$post->title}}</h3></a>
    <p>{{$post->content}}</p>

    <form action="{{route('posts.destroy',$post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" value="Delete">Delete!</button>
    </form>
@endforeach



</body>
</html>
