<div>
    @foreach ($posts as $post)
        <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
        <p>By {{ $post->author->name }}</p>
    @endforeach
</div>

