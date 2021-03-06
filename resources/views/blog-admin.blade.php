@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="holder">
            <a class="btn btn-primary first" href="{{ route('main') }}" target="_blank">View how public blog look</a>
            <a class="btn btn-primary" href="{{ route('posts.create') }}">Add Post</a>
        </div>
        @foreach ($posts as $post)
            <article class="posts">
                <h1 class="posts__title">{{ $post['title'] }}</h1>
                <p class="posts__time">{{ $post['created_at']->format('d F, Y')}}
                    <span class="posts__simbol">|</span>
                    <a class="posts__comments"  href="{{ route('posts.show', $post['id']) . '#comments' }}">{{ count($post->comment)}} @if (count($post->comment) > 1)  {{ "comments" }} @else {{ "comment " }} @endif</a>
                </p>
                <div class="posts__info">{!! $post['text'] !!}</div>
                <a class="posts__read-more" href="{{ route('posts.show', $post['id']) }}">Read more...</a>
                <div class="btn-group" style="overflow: auto">
                    <form style='float: left;' action="{{ route('posts.destroy', $post['id']) }}" method="POST">
                        @method('DELETE') @csrf
                        <input class="btn btn-danger" type="submit" value="DELETE"> 
                    </form>
                    &nbsp;
                    <form style='float: left;' action="{{ route('posts.edit', $post['id']) }}" method="GET">
                        <input class="btn btn-primary" type="submit" value="UPDATE">
                    </form>
                </div>
            </article>
        @endforeach
    </div>
@endsection
