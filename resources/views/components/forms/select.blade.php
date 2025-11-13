<label for="{{ $id }}">{{ $label }}</label><br>
<select name="{{ $name }}" id="{{ $id }}">
    @if($default !== null)
        <option value="" disabled selected>
            {{ $default }}
        </option>
    @else
        <option value="" disabled selected>
            Выберите категорию
        </option>
    @endif
    @foreach($arrayOptions as $option)
        <option value="{{ $option->id }}"
            {{ $option->id == old($name, $value) ? 'selected' : '' }}>
            {{ $option->name }}
        </option>
    @endforeach
</select>
<x-error-link :name="$name"/>
