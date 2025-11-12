<div class="{{ $classes }}">
    <label for="{{ $id }}">{{ $label }}</label>
    <input id="{{ $id }}" type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}" class="form-control">
    <x-error-link :name="$name" />
</div>
