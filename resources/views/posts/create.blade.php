<x-layout.main title="Create">
    <div class="row">
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <x-forms.input name="title" label="label title" />
        <x-forms.textarea name="content" label="label content"/>
        <x-forms.select name="category_id" :array-options="$categories" label="label for categories" default="Посмотри категории" />
        <x-forms.multi-select name="tag_ids" label="Label for tags" :tags="$tags" />
        <br><input type="submit" name="sub" value="submit" class="btn btn-success">
    </form>
    </div>
</x-layout.main>
