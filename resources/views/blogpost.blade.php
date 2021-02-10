@extends('layouts.app')

@section('content')
    <div class="container">
        <article class="post">
            <h1 class="post posts__title">{{ $post['title'] }}</h1>
            <p class="posts__time">{{ $post['created_at']->format('d F, Y') }}</p>
            <div class="post">{!! $post['text'] !!}</div>
        </article>

        <hr>

        @if (session('status_success'))
            <p style="color: green"><b>{{ session('status_success') }}</b></p>
        @else
            <p style="color: red"><b>{{ session('status_error') }}</b></p>
        @endif

        <p class="comment-title" id="comments">Comments: </p>
        @foreach ($post->comment as $cm)
            <div class="comment">
                <div class="comment__top">
                    <p class="comment__name">{{ $cm['name'] }} <span class="posts__simbol">|</span></p>
                    <p class="comment__time">{{ $post['created_at']->diffForHumans() }}</p>
                </div>
                <p class="comment__cm">{{ $cm['comment'] }}</p>
                <div class="btn-group comment__destroy" style="overflow: auto">
                    <form style='float: left;' action="{{ route('comments.destroy', ['id'=>$post['id'],'commentid'=>$cm['id']] ) .  '#comments' }}" method="POST">
                        @method('DELETE') @csrf
                        <input class="btn btn-danger" type="submit" value="DELETE"> 
                    </form>
                </div>
            </div>
        @endforeach
        @if (count($post->comment) == 0)
            <p class="comment__null"> Be the first to write a comment... </p>
        @endif
        <form action="{{ route('comments.store', $post['id']) . '#comments' }}" method="POST">
            @csrf
            <p class="comment-title"> Write a comment: </p>
            <label for="name" class="label label--comment">Name</label>
            <input type="text" id="name" name="name" class="input" placeholder="Write your name or username"><br><br>

            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="comment" class="label label--comment">Write a comment...</label>
            <input type="text" id="comment" name="comment" class="input" placeholder="Write a comment..."><br><br>

            @error('comment')
                <div class="alert alert-danger">{{ $message }}</div><br>
            @enderror

            <input class="btn btn-primary" type="submit" value="ADD COMMENT">
        </form>
    </div>
@endsection
