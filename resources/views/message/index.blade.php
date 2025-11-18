<x-layout.main title="message">
    @foreach($messages as $message)
        <div>
            <h2>{{ $message->title }}</h2>
            <div>Category: {{ $message->category->title }}</div>
            <div>Author: {{ $message->user->name }}</div>
            <a href="{{ route('main.message', $message) }}">Read more</a>
        </div>
        <hr>
    @endforeach
</x-layout.main>
