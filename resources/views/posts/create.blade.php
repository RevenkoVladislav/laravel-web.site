@extends('layouts.main')

@section('content')
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <p>Title:</p>
        <input type="text" name="title" value="{{ old('title') }}"> <br>
        @error('title')
            <p>{{ $message }}</p>
        @enderror<br>
        <p>Content:</p>
        <textarea name="content" cols="30" rows="10">{{ old('content') }}</textarea> <br>
        @error('content')
            <p>{{ $message }}</p>
        @enderror<br>
        <p>Category: </p>
        <select name="category_id">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                {{ $category->id == old('category_id') ? 'selected' : '' }}>
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
@endsection
