<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('viewUser') }}" method="POST">
        @csrf
        User name: <br>
        <input type="text" name="user" id="">
        <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>