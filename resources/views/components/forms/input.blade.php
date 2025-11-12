<div class="{{ $classes }}">
    <label for="{{ $id }}">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" value="{{ old($name, $value) }}" class="form-control">
    <x-error-link :name="$name" />
</div>
