<article class="post">
    <header>
        <h2 class="article-list-headline">
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
    </header>
    <p class="article-list-content {{ $type }}">{!! nl2br($post->text) !!}</p>
    <footer class="article-list-footer">
        <time datetime="{{ $post->created_at->toW3cString() }}">{{ $post->created_at->format('M j, Y') }}</time>
        <p>
            <strong>Autor: <a href="/users/{{ $post->user->id }}" class="name-author">{{ $post->user->name }}</a></strong>
        </p>

        <div class="comments-link">
            <a href="/posts/{{ $post->slug }}#comments">
                {{ $post->comments->count() }}
                <strong>{{ trans_choice('messages.count_comments', $post->comments) }}</strong>
            </a>
        </div>
    </footer>
</article>

