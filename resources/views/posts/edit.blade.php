<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('posts.update', $data->id) }}" method="post">

            <div class="col-md-6 mt-5">
                <h1>Blog Edit</h1>
                <div>
                    <label for="">Name</label>
                    <input name="name" id="name" class="form-control mt-2" type="text"
                        value="{{ $data->name }}">
                </div>
                <div>
                    <label for="">Description</label>
                    <input name="description" id="description" class="form-control mt-2" type="text"
                        value="{{ $data->description }}">
                </div>
                <div>
                    <input type="radio" value="active" name="radio" checked>
                    <label>Active</label>
                    <input type="radio" value="suspend" name="radio">
                    <label>suspend</label>
                </div>
                <button type="submit" class="btn btn-primary mt-2">Edit</button>
            </div>
        </form>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('js/bootstrap.js') }}">
