@extends('layouts.app')

@section('content')
    <div class="container">

        @if (session('status_success'))
            <p style="color: green"><b>{{ session('status_success') }}</b></p>
        @else
            <p style="color: red"><b>{{ session('status_error') }}</b></p>
        @endif

        <form action="{{ route('posts.update', $post['id']) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="title" class="label">Post title:</label>
            <input type="text" id="title" name="title" class="input" value="{{ $post['title'] }}"><br><br>

            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="text" class="label">Post text:</label>
            <textarea type="text" id="mytextarea" class="tiny" name="text">{{ $post['text'] }}</textarea><br>

            @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br>
            <input type="submit" value="Submit" class="btn btn-primary">
            <br><br>
    </div>
@endsection
