@include('errors')

<form id="comments" class="add-comment" action="/comments" method="POST">
    @csrf

    <div class="container-add-comment">
        <label for="text">
            <h5>Komentár</h5>
        </label>
        <div>
            <textarea class="comment-textarea" name="text" rows="3" placeholder="Napísať komentár..."></textarea>
        </div>
    </div>

    <div class="container-send-comment">

        @auth

        <div class="auth-area-comment">
            
            <p>
                <a href="/users/{{auth()->user()->id }}">
                    {{ auth()->user()->name }}
                </a>
                Prihlásený
            </p>
         </div>

        <button class="button-send-comment">
            Odoslať komentár
        </button>

        <input type="hidden" name="post_id" value="{{ $post->id }}">
        
        @else

        <div class="auth-area-comment">
            <p>
                Nie ste prihlásený/registrovaný
            </p>
        </div>
        <div class="auth-area-comment">
            <p>
                <a href="{{ route('login') }}">Prihlásiť sa</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}">Registrovať</a>
                @endif
            </p>
        </div>  

        @endauth
    </div>
</form>