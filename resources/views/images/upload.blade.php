<div>
    <h1>Upload images for {{ $item }} # {{ $model->id }}</h1>
    <form action="{{ route('admin.images.store', [$item, $model->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image[]" multiple>
        <x-error-link name="image" />
        <button type="submit">upload</button>
    </form>
</div>
