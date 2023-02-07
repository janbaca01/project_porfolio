<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{--     @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">

        <header class="site-header">
            <h1 class="title logo">
                <a href="/">Ján Bača</a>
            </h1>
            <p class="welcome-text">ahoj, vítam ťa na mojom portfóliu...</p>
            
            {{-- <div class="fancy-border">
                <span>
                    <h2 class="auth-headline">Prihlásenie</h2>
                </span>
            </div> --}}
        </header>

        <main class="primary-content">
            @yield('content')
        </main>

        <aside>
            @yield('sidebar')
        </aside>

        {{-- <example-component></example-component> --}}
    </div>

    @yield('scripts')
    
</body>
</html>
