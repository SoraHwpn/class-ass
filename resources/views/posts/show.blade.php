<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<div class="container">
    <a class="btn btn-primary mt-5" href="{{ route('posts.index') }}">Go to created</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->description }}</td>
                <td>{{ $data->is_active ? 'Active' : 'Suspended' }}</td>
            </tr>
        </tbody>
    </table>
</div>
