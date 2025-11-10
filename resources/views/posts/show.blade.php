@extends('layouts.main')

@section('content')
    <div>
        <h2 style="text-align: center">{{ $post->title }}</h2>

        <div>
            <p>{{ $post->content }}</p>
        </div>

        <a href="{{ route('posts.edit', $post->id) }}"><p>edit</p></a>
    </div>
@endsection
