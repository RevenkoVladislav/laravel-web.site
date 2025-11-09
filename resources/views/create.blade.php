@extends('layouts.main')

@section('content')
    <form method="POST" action="{{ route('messages.store') }}">
        @csrf
        <div>
            Title:
        <input type="text" name="text">
        </div>
        <br>
        <div>
            Content:
            <input type="text" name="content">
        </div>
        <br>
        <button>Send</button>
    </form>
@endsection
