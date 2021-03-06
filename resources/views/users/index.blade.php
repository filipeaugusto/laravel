<x-layout>

    <x-slot name="title">
        Users
    </x-slot>

    <x-slot name="page_heading">
    Users listing
    </x-slot>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->created_at }}</td>
                <td>
                    <x-inputs.button :data="$data" :class="'btn-warning'" :fa="'fa-list'"> view</x-inputs.button>
                    <x-inputs.button :data="$data" :class="'btn-info'" :fa="'fa-edit'"> edit</x-inputs.button>
                    <x-inputs.button :data="$data" :class="'btn-danger'" :fa="'fa-trash-o'"> delete</x-inputs.button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $users->links() }}

</x-layout>
