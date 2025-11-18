<x-layout.admin :title="$message->title">
    <a href="{{ route('admin.messages.index') }}">Back</a> |
    <a href="{{ route('admin.messages.edit', [ $message->id ]) }}">Edit</a>
    <hr>
    <h1>{{ $message->title }}</h1>
    <hr>
    Category: {{ $message->category->title }}
    <hr>
    Tags: {{ $message->tags }}
    <hr>
    <div>
        {{ $message->content }}
    </div>
</x-layout.admin>
