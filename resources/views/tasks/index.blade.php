<x-layout title="Index">
    <section class="mb-8 text-center">
        <h1 class="text-3xl font-bold"> Liste aller Aufgaben </h1>
        <form action="{{ route('tasks.index') }}" method="GET" class="join mt-6">
            {{-- q -> query --}}
            <input type="text" name="q" value="{{ request('q') }}" 
                placeholder="Aufgaben durchsuchen" class="input input-bordered join-item w-full max-w-md">
                <button type="submit" class="btn btn-primary join-item">Suchen</button>
        </form>
    </section>
    @forelse($tasks as $task)
        <x-task-card :task="$task" />
    @empty
        @if(request('q'))
            Keine Aufgaben gefunden für "{{ request('q') }}"
        @else
            Keine Aufgaben gefunden
        @endif
    @endforelse

    {{ $tasks->links() }}

</x-layout>