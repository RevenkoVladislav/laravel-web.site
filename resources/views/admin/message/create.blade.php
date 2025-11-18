<x-layout.admin title="Create message">
    <h1>Create message</h1>
    <form method="post" action="{{ route('admin.messages.store') }}">
        @csrf
        <x-forms.input label="Msg title" name="title" />
        <x-forms.input label="Full text" name="content" />
        <x-forms.select label="Category" name="category_id" :array-options="$categories" display-field="title" default="Не выбрана" />
        <button>Send</button>
        <button type="button" class="app-run-valid-msg">Valid sample</button>
    </form>
</x-layout.admin>
