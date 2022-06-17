<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit - Challenge</title>
</head>
<body>
    <form method="post" action="{{ route('challengeUpdate', $challenge->id) }}">
        @csrf
        @method('put')
        
        <input type="text" placeholder="Enter any name" value="{{ $challenge->name }}" name="kacyiru">
        <input type="submit" value="Update">
    </form>
</body>
</html>