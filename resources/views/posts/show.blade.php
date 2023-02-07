@extends('layouts.master')

@section('content')

    @include('posts.article', [ 'type' => 'full' ])
    @include('comments.index')


@endsection

@section('footer')

    <footer>
        @include('posts.footer')
    </footer>

@endsection
