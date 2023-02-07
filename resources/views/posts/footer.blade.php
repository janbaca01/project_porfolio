@if (Route::has('login'))
<div class="auth-area">
    @auth
        <p>
            <a href="/user/{{auth()->user()->name }}">{{ auth()->user()->name }}</a>
            <a href="{{ url('/logout') }}" class="logout-link">Odhlásiť sa</a>
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