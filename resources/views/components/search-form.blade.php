@props([
    'route',
    'placeholder' => 'Aufgaben durchsuchen',
])

<form action="{{ route($route) }}" method="GET" class="mt-6 flex gap-2">
    <input type="text" name="q" value="{{ request('q') }}"
        placeholder="{{ $placeholder }}" class="input w-full max-w-md">
    <button type="submit" class="btn btn-primary">Suchen</button>
</form>
