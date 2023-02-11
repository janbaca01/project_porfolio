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
            <p class="welcome-text">ahoj, vítam ťa na svojej webstránke...</p>

            <div class="fancy-border">
                <span>
                    <img src="https://s3-eu-west-1.amazonaws.com/cdn.staffino.com/avatars/afc239c5a8fbc1f4f98a9f44e5ad0daa820030e2db80c1436ae6947ac21978c1.png" alt="Ján Bača" class="avatar">
                </span>
            </div>
        </header>

        <main class="primary-content">
            <flash-message text="Vitaj na stránke ! " ></flash-message>


            @yield('content')
        </main>

        <aside>
            @yield('footer')
        </aside>

    </div>

    @yield('scripts')

</body>
</html>
