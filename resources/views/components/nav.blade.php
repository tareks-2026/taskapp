<header class="bg-neutral text-neutral-content">
    <nav class="mx-auto flex max-w-5xl items-center justify-between px-4 py-4">
        <a href="{{ route('welcome') }}" 
            class="text-xl font-bold {{ request()->routeIs('welcome') ? '' : 'opacity-80 hover:opacity-100' }}"> Task<span class="text-primary">App</span> 
        </a>
        <div class="flex items-center gap-3">
            <a href="{{ route('tasks.index') }}"
                class="text-sm {{ request()->routeIs('tasks.index') ? 'font-medium' : 'opacity-80 hover:opacity-100' }}">
                Übersicht
            </a>
            <span class="text-sm opacity-80"> Log in </span>
            <span class="btn btn-primary btn-sm"> Register </span>
        </div>
    </nav>
</header>