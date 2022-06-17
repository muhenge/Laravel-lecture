<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignments</title>

    <style>
        body{
            background-color: #eee;
            display: flex;
            justify-content: center;
             text-align: center;
             flex-direction: column;
             align-items: center;  
        }
       
        .assignments{
            margin-top: 5%;
            width: 400px;
            
        }
        ul li{
            list-style-type: none;
            font-size: 20pt;
        }
    </style>
</head>
<body>
     <a href="{{route('login')}}">Login</a> 
    <a href="{{route('register')}}">Register</a>
    <h3><u>ASSIGNMENTS</u></h3>
    <div class="assignments">
        <ul>
            <li><a href="{{route('sn_sv')}}">Session Work</a></li>
            <li><a href="{{route('todo.index')}}">Todo List Work</a></li>
        </ul>
    </div>
</body>
</html>