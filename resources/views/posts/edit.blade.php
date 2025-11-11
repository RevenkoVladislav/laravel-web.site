@extends('layouts.main')

@section('content')
    <div class="p-2">
    <form method="post" action="{{ route('posts.update', $post->id) }}">
        @method('Patch')
        @csrf
        <p>Title:</p>
        <input type="text" name="title" value="{{ old('title', $post->title) }}"> <br>
        @error('title')
        <p>{{ $message }}</p>
        @enderror<br>
        <p>Content:</p> <textarea name="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea> <br>
        @error('content')
        <p>{{ $message }}</p>
        @enderror<br>
        <p>Category: </p>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == old('category_id', $post->category_id) ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        <br>
        @error('category_id')
        <p>{{ $message }}</p>
        @enderror
        <br>
        <input type="submit" name="sub" value="submit">
    </form>
    </div>
@endsection
