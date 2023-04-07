<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<div class="container">
    <a class="btn btn-primary mt-5" href="{{ route('posts.create') }}">Go to created</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $val)
                <tr>
                    <td>{{ $val->id }}</td>
                    <td>{{ $val->name }}</td>
                    <td>{{ $val->description }}</td>
                    <td>{{ $val->is_active ? "Active" : "Suspended"}}</td>
                    <td><a class="btn btn-primary" href="{{ route('posts.edit', $val->id) }}">Edit</a>
                        <a class="btn btn-success" href="{{ route('posts.show', $val->id) }}">View</a>
                        <form action="{{ route('posts.destroy', $val->id) }}" method="post" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
