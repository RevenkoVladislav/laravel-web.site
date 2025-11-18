<x-layout.admin title="Edit message">
    <form method="post" action="{{ route('admin.messages.update', $message) }}">
        @csrf
        @method('PUT')
        <x-forms.input label="Msg title" name="title" :value="$message->title" />
        <x-forms.input label="Full text" name="content" :value="$message->content" />
        <x-forms.select label="Category" name="category_for_message_id"
                        :array-options="$categories"
                        display-field="title"
                        :value="$message->category_for_message_id"/>
        <button type="submit">Send</button>
    </form>
</x-layout.admin>
