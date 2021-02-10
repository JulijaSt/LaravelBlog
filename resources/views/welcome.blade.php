@extends('layouts.app')

@section('content')
    <div class="hero">
        <h2 class="hero__title">My Journey Begins Here</h2>
    </div>
    <div class="container">
        @foreach ($posts as $post)
            <article class="posts">
                <h1 class="posts__title">{{ $post['title'] }}</h1>
                <p class="posts__time">{{ $post['created_at']->format('d F, Y') }}
                    <span class="posts__simbol">|</span>
                    <a class="posts__comments"
                        href="{{ route('public.show', $post['id']) . '#comments' }}">{{ count($post->comment) }}
                    @if (count($post->comment) > 1) {{ 'comments' }} @else
                            {{ 'comment ' }}
                        @endif
                    </a>
                </p>
                <div class="posts__info">{!! $post['text'] !!}</div>
                <a class="posts__read-more" href="{{ route('public.show', $post['id']) }}">Read more...</a>
            </article>
        @endforeach
    </div>

@endsection
