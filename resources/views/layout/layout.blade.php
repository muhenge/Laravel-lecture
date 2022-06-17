<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Members</title>
    <style>
        body{
            background-color: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: auto;
        }
        .list-member{
            width: 400px;
        }
        .list-member form button{
            margin-top: 5px;
        }
        .edit-member{
            display: flex;
            flex-direction: column;
            width: 400px;
            text-align: center;
        }
        .edit-member form {
            display: flex;
            flex-direction: column;
        }
        .edit-member form input,button{
            margin-bottom: 5px;
        }
        .add-member{
            display: flex;
            flex-direction: column;
            text-align: center;
            width: 400px;
        }
        .add-member form{
            display: flex;
            flex-direction: column;
        }
        .add-member form input, button{
            margin-bottom: 5px;
        }
        .message{
            margin-top: 20px;
            margin-bottom: 20px;
            height: 20px;
            color: chartreuse;
            font-size: 20pt;
        }
    </style>
</head>
<body>
   
    @yield('content')
    
</body>
</html>