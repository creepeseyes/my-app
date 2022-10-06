<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
    <div>
    <a href="{{ route("posts.index") }}">Go to Index Page</a>
    </div>

    <h3>{{$post->title}}</h3>
    <p>{{$post->content}}</p>

    <a href="{{route('posts.edit', $post->id)}}">Edit</a><br>

    Comments:
    <form action="{{route('comments.store')}}" method="post">
        @csrf
        <textarea  name="comm"></textarea>
        <input type="hidden" name="post_id" value="{{$post->id}}">
        <button type="submit">Save</button>
    </form>

    @foreach($comments as $com)
        @if($com->post_id == $post->id)
        <p>{{$com->comm}}</p>
        <a href="{{route("comments.edit", $com->id)}}">Edit</a>

        <form action="{{route('comments.destroy',$com->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" value="Delete">Delete!</button>
        </form>
        @endif
    @endforeach
    </body>
</html>
