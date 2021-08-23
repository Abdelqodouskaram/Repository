<h1>POSTS</h1>

@foreach ($posts as $post)
    Title : {{ $post->title }} <br><br>

    <a href="posts/{{ $post->id }}">Show</a> <br><br>
@endforeach