<x-layout>

    <x-slot name="title">
        Show, posts
    </x-slot>

    <h1>Show posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Created</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->created_at }}</td>
                <td>
                    <a href="/posts/{{$data->id}}" class="btn btn-small btn-warning">View</a>
                    <a href="/posts/{{$data->id}}" class="btn btn-small btn-info">Edit</a>
                    <a href="/posts/{{$data->id}}" class="btn btn-small btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
