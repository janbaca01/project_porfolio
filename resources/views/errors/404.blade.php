@extends('layouts.master')

@section('content')

<div class="error-page">
    <p><span>404 |</span> Stránka sa nenašla.</p>
</div>

@endsection

@section('footer')

    <footer>
        @include('posts.footer')
    </footer>

@endsection
