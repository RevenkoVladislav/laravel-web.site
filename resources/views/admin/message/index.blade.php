<x-layout.admin title="Messages">
    <a href="{{ route('posts.index') }}">Home</a> |
    <a href="{{ route('admin.messages.create') }}">Create message</a>
    <hr>
    <h1>Messages</h1>
    <hr>
    @if(session('notice'))
        <div class="alert alert-success">
            {{ session('notice') }}
        </div>
        <hr>
    @endif

    @foreach ($messages as $message)
        <div>
            <h2>{{ $message->title }}</h2>
            <div>Category: {{ $message->category->title }}</div>
            <a href="{{ route('admin.messages.show', [ $message->id ]) }}">Read more</a>
        </div>
    @endforeach
</x-layout.admin>
