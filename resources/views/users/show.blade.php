<x-layout>

    <x-slot name="title">
        Show, {{ $user->name }}
    </x-slot>

    <h1>Hello, {{ $user->name }}</h1>


    <a href="/users" class="btn btn-small btn-primary"><<< Voltar</a>

    <div class="col-md-12">
        <div>
            <div class="alert alert-primary" role="alert">
                This is a primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-secondary" role="alert">
                This is a secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-success" role="alert">
                This is a success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-danger" role="alert">
                This is a danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-warning" role="alert">
                This is a warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-info" role="alert">
                This is a info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-light" role="alert">
                This is a light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
            <div class="alert alert-dark" role="alert">
                This is a dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
            </div>
        </div>
    </div>


</x-layout>
