<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
    <link href="{{ asset('bootstrap.css') }}" rel="stylesheet">

</head>
<body>
    <h1>Task</h1>
    <div class="card-body">
        <form action="{{ route('taskstore') }}" method="POST">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-2 col-form-label text-md-end">Task</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="task" required>                               
                </div>
            </div>

            <div class="row mb-3">
                <label for="name" class="col-md-2 col-form-label text-md-end">Description</label>
                <div class="col-md-6">
                    <textarea name="desc" cols="30" rows="6" class="form-control"></textarea>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-2">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>