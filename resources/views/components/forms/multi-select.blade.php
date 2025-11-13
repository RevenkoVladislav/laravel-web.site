<br>
<div class="{{ $classes }}">
    <label for="{{ $id }}">{{ $label }}</label>
        <select  name="{{ $name }}[]" multiple="multiple" style="width: 100%;">
            @foreach($tags as $tag)
                <option
                    {{ is_array(old($name)) && in_array($tag->id, old($name)) ? 'selected' : '' }}
                    value="{{ $tag->id }}">
                    {{ $tag->name }}</option>
            @endforeach
        </select>
    <x-error-link :name="$name" />
</div>

