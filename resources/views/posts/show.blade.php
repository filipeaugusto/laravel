<x-layout>

    <x-slot name="title">
        Show, {{ $post->name }}
    </x-slot>

    <h1>Hello, {{ $post->name }}</h1>


    <a href="{{ url()->previous() }}" class="btn btn-small btn-primary"><<< Voltar</a>



</x-layout>
