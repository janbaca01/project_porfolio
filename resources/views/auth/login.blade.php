@extends('layouts.auth')

@section('content')

<div class="auth-form-container">
<form class="auth-form" method="POST" action="{{ route('login') }}">
    @csrf

    {{-- email --}}
    <h6>{{ __('E-mail') }}</h6>
    <label class="input-area-form" for="email" >
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    </label>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

    {{-- password --}}
    <h6>{{ __('Heslo') }}</h6>
    <label class="input-area-form" for="password" >
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    </label>

        @error('password')
        <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
        </span>
        @enderror

        {{-- button --}}
        <button class="button auth" type="submit">
            {{ __('Prihlásiť') }}
        </button>

    <div class="auth-form-footer">
        {{-- checkbox --}}
        <label class="checkbox-auth" for="remember">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            {{ __('Zapamätať') }}
        </label>

        {{-- wrong password --}}
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">
            {{ __('Zabudli ste svoje heslo?') }}
            </a>
        @endif
    </div>

</form>
</div>

@endsection
