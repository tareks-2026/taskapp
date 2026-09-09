<x-layout title="Dashboard">

    <h1> Hi, {{ $user->name }}!</h1>
    {{-- @dd(request()->user()); --}}
    <p> Hier kommen die Aufgaben </p>

</x-layout>