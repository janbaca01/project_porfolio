<section id="comments-list">

    @include('comments.create')

    <ol>
        @foreach ($post->comments as $comment)
            <li class="comments-list-item">
                @include('comments.show')    
            </li>   
        @endforeach
    </ol>
</section>