<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session</title>
</head>
<body>
   
        <h1>{{ Session::get('kigali') }}</h1><br>
        <form action="{{ route('challengeStore') }}">
            <input type="hidden" value="{{ Session::get('kigali') }}" name="kLab"><br>
        <input type="submit" name="Submit" value="Store">
        </form>
</body>
</html>