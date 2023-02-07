@extends('layouts.master')

@section('content')

<section id="article-list">
    <ol>
        @foreach ($posts as $post)
        
        <li class="article-list-item">
            @include('posts.article', [ 'type' => 'listing' ])
        </li>

        @endforeach
    </ol>
</section>

@endsection

@section('footer')

    <footer>
        @include('posts.footer')
    </footer>

@endsection
