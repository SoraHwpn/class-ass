<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="col-md-6 mt-5">
                <h1>Created List</h1>
                <div>
                    <label for="">Name</label>
                    <input name="name" class="form-control mt-2" type="text">
                </div>
                <div>
                    <label for="">Description</label>
                    <input name="description" class="form-control mt-2" type="text">
                </div>
                <div>
                    <input type="radio" value="active" name="radio" checked>
                    <label>Active</label>
                    <input type="radio" value="suspend" name="radio">
                    <label>suspend</label>
                </div>
                <button class="btn btn-primary mt-2">Create</button>
            </div>
        </form>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('js/bootstrap.js') }}">
