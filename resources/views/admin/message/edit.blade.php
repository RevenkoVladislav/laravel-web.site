<x-layout.admin title="Edit message">
    <form method="post" action="{{ route('admin.messages.update', [ $message->id ]) }}">
        @csrf
        @method('PUT')
        <x-forms.input label="Msg title" name="title" :value="$message->title" />
        <x-forms.input label="Full text" name="content" :value="$message->content" />
        <x-forms.select label="Category" name="category_id" :options="$categories"  placeholder="Не выбрана"/>
        <button>Send</button>
        <button type="button" class="app-run-valid-msg">Valid sample</button>
    </form>
</x-layout.admin>
