<x-layout.main title="shools">
    <div class="row">
        <h1>Добавить курсы в школу {{ $school->title }}</h1>
        <form method="post" action="{{ route('school.form', $school->id) }}">
            @csrf
            @method('PUT')
                <table class="table table-bordered">
                    <tr>
                        <td>Title</td>
                        <td>Price</td>
                    </tr>

                    @foreach($courses as $course)
                    <tbody>
                    <tr>
                        <td>
                            <input type="hidden" name="courses[{{ $loop->index }}][id]" value="{{ $course->id }}" />
                            {{ $course->title }}
                        </td>
                        <td>
                            <input type="text"
                                   name="courses[{{ $loop->index }}][price]"
                                   value="{{ old('courses')[$loop->index]['price'] ?? $prices[$course->id] ?? '0' }}"
                                   class="form-control">
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <br><input type="submit" name="sub" value="submit" class="btn btn-success">
        </form>
    </div>

    <div class="row">
        <br>
        @foreach($courses as $course)
        <form action="{{ route('course.destroy', $course)}}" method="POST">
            <button type="submit">Удалить курс - {{ $course->title }}</button>
            <br>
            <br>
            @csrf
            @method('DELETE')
        </form>
        @endforeach
    </div>
</x-layout.main>
