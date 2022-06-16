<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Challenge</title>
</head>
<body>
    <form action="{{ route('challenge') }}">
        {{-- @csrf --}}
        <input type="text" placeholder="Enter any name" required name="kacyiru">
        <input type="submit" value="Save">
    </form>
</body>
</html>