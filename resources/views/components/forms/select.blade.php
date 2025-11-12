<label for="{{ $id }}">{{ $label }}</label><br>
<select name="{{ $name }}" id="{{ $id }}">
    @foreach($arrayOptions as $option)
        <option value="{{ $option->id }}"
            {{ $option->id == old($name, $value) ? 'selected' : '' }}>
            {{ $option->name }}
        </option>
    @endforeach
</select>
<x-error-link :name="$name"/>
