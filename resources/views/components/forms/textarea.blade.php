<div class="{{ $classes }}">
    <label for="{{ $id }}">{{ $label }}</label>
    <textarea name="{{ $name }}" cols="{{ $cols }}" rows="{{ $rows }}">{{ old($name, $value) }}</textarea>
    <x-error-link :name="$name" />
</div>
