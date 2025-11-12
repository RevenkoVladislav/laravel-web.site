<label for="{{ $id }}">{{ $label }}</label><br>
<select name="{{ $name }}">
    @foreach($arrayOptions as $option)
        <option value="{{ $option->id }}"
            {{ $option->id == old($name) ? 'selected' : '' }}>
            {{ $option->name }}
        </option>
    @endforeach
</select>
<x-error-link :name="$name"/>
