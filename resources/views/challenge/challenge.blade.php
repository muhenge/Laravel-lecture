<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge</title>
    <link href="{{ asset('bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div style="margin-left: 3rem; margin-right:4rem; margin-top:4rem">
        <form action="{{ route('challenge') }}">
            {{-- @csrf --}}
            <input type="text" class="form-control" placeholder="Enter any name" required name="kacyiru">
            <input type="submit" class="btn btn-primary" value="Save">
        </form>
    </div>
</body>
</html>