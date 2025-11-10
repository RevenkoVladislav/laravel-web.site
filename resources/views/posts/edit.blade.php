@extends('layouts.main')

@section('content')
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        Title: <input type="text" name="title" value="{{ old('title', $post->title) }}"> <br>
        @error('title')
        <p>{{ $message }}</p>
        @enderror<br>
        Content: <textarea name="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea> <br>
        @error('content')
        <p>{{ $message }}</p>
        @enderror<br>
        <input type="submit" name="sub" value="submit">
    </form>
@endsection
