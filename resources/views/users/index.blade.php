<x-layout>

    <x-slot name="title">
        Show, users
    </x-slot>

    <h1>Show users</h1>

    <table class="table">
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
                    <a href="/users/{{$data->id}}" class="btn btn-small btn-warning">View</a>
                    <a href="/users/{{$data->id}}" class="btn btn-small btn-info">Edit</a>
                    <a href="/users/{{$data->id}}" class="btn btn-small btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
