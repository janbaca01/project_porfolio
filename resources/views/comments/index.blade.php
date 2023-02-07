<section id="comments-list">
    <ol>
        @foreach ($post->comments as $comment)
            <li class="comments-list-item">
                @include('comments.show')    
            </li>   
        @endforeach
    </ol>
</section>