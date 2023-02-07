<div class="comment">
    <div class="comment-content">
        <p>{!! nl2br($comment->text) !!}</p>
    </div>
    <footer class="comment-footer">
        <p class="comment-author">
            <strong>Autor:</strong> <a href="/users/{{ $comment->user->id }}" class="name-author">{{ $comment->user->name }}</a>
        </p>
        <time datetime="{{ $comment->created_at->toW3cString() }}">{{ $comment->created_at->diffForHUmans() }}</time>
    </footer>
</div>