@if (Route::has('login'))
<div class="auth-area">
    @auth
        <p>
            <a href="/users/{{auth()->user()->id }}">{{ auth()->user()->name }}</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="logout-link">
                Odhlásiť sa
            </a>
              
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
            </form>







        </p>
    @else
        <a href="{{ route('login') }}">Prihlásiť sa</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}">Registrovať</a>
        @endif
    @endauth
</div>

<div class="copyright">
    <p>&copy; 2023, Ján Bača</p>
</div>
@endif