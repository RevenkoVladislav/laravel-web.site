<br>
<div class="{{ $classes }}">
    <label for="{{ $id }}">{{ $label }}</label>
    <select name="{{ $name }}[]" multiple="multiple" style="width: 100%;">
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}"
            {{ in_array($tag->id, $selected) ? 'selected' : '' }}>
            {{ $tag->name }}
            </option>
        @endforeach
    </select>
    <x-error-link :name="$name"/>
</div>

