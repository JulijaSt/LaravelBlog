@extends('layouts.app')

@section('content')
    <div class="container">
        <article class="post">
            <h1 class="post posts__title">{{ $post['title'] }}</h1>
            <p class="posts__time">{{ $post['created_at']->format('d F, Y')}}</p>
            <div class="post"><?php echo $post['text']; ?></div>
        </article>
    </div>
@endsection
