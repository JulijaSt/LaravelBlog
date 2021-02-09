@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="holder">
            <a class="btn btn-primary" href="{{ url('/blog-admin/create-post') }}">Add Post</a>
        </div>
        @foreach ($posts as $post)
            <article class="posts">
                <h1 class="posts__title">{{ $post['title'] }}</h1>
                <p class="posts__time">{{ $post['created_at']->format('d F, Y')}}</p>
                <div class="posts__info"><?php echo $post['text']; ?></div>
                <a class="posts__read-more" href="{{ route('posts.show', $post['id']) }}">Read more...</a>
            </article>
        @endforeach
    </div>
@endsection
