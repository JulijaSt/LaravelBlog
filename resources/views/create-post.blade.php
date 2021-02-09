@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="/blog-admin">
            @csrf
            <label for="title" class="label">Post title:</label>
            <input type="text" id="title" name="title" class="input"><br><br>
    
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    
            <label for="text" class="label">Post text:</label>
            <textarea type="text" id="mytextarea" class="tiny" name="text"></textarea><br>
    
            @error('text')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    
            <br>
            <input type="submit" value="Submit" class="btn btn-primary">
            <br><br>
        </form>
    </div>
@endsection