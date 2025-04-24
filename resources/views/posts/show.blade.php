<div>
    <h2>{{ $post->title }}</h2>
    <p>By {{ $post->author->name }}</p>
    <p>{{ $post->content }}</p>

    <h3>Comments:</h3>
    @foreach ($post->comments as $comment)
        <p><strong>{{ $comment->commenter_name }}:</strong> {{ $comment->comment }}</p>
    @endforeach

    <form method="POST" action="/posts/{{ $post->id }}/comments">
        @csrf
        <input type="text" name="commenter_name" placeholder="Your name">
        <textarea name="comment" placeholder="Your comment"></textarea>
        <button type="submit">Submit</button>
    </form>
</div>
