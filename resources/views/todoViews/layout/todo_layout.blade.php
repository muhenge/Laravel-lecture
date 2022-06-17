<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Todo List</title>
    <style>
        body{
            background-color: #eee;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            overflow:auto;
        }

        .todo-list{
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .todo-list .create-form{
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            width: 400px;
        }
        .todo-list .create-form input,textarea,button{
            margin-bottom: 5px;
        }
       
        .todo-list .list-todo{
            margin-top: 30px;
            border-left: 1px solid #001233;
            margin-left: 20px;
            height: 100%;
            width: 400px;
        }
        .list-todo .item{
            padding-left: 20px;
        }
          .item form button{
            width: 100px;
            height: auto;
        }
        .item form {
            display: flex;
        }
        .edit-todo{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .edit-todo form{
            display: flex;
            flex-direction: column;
            width: 400px;
            justify-content: center;
            
        }
        .edit-todo form input, textarea, button{
            margin-bottom: 5px;
        }
      
    </style>
</head>
<body>
   
    @yield('content')
</body>
</html>