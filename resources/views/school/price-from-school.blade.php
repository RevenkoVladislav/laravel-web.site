<x-layout.main title="price-from-school">
    <div class="row">
        <h1 class="text-center">Цены по школам для курса - {{ $course->title }}</h1>
        <table class="table table-bordered">
            <tr>
                <td>School</td>
                <td>Price</td>
            </tr>
            @foreach($schools as $school)
            <tbody>
            <td>
                {{ $school->title }}
            </td>
            <td>
                 {{ $school->pivot->price }}
            </td>
            </tbody>
            @endforeach
        </table>
    </div>
</x-layout.main>
