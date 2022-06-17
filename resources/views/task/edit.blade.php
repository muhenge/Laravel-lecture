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
        <form action="{{ route('taskUpdate',$task->id) }}" method="POST">
            @csrf
            @method('put')

            <div class="row mb-3">
                <label for="name" class="col-md-2 col-form-label text-md-end">Task</label>
                <div class="col-md-6">
                    <input type="text" value="{{ $task->title }}" class="form-control @error('task') is-invalid @enderror" name="task">                               
                </div>
                @error('task')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row mb-3">
                <label for="name" class="col-md-2 col-form-label text-md-end">Description</label>
                <div class="col-md-6">
                    <textarea name="desc" cols="30" rows="6" class="form-control @error('desc') is-invalid @enderror">{{ $task->description }}</textarea>
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-6 offset-md-2">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>