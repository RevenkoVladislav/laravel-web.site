@props([
	'title'
])

<x-layout.main :title="$title">
    <div class="row mt-3">
        <div class="col col-3">
            <x-menu />
        </div>
        <div class="col col-9">
            {{ $slot }}
        </div>
    </div>
</x-layout.main>
