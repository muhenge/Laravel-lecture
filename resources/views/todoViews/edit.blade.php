@extends('todoViews.layout.todo_layout')
@section('content')

    <div class="edit-todo">
        <h3><u>Update Todo</u></h3>
        <form action="{{route('todo.update',$todo->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <input type="text" name="title" placeholder="title" value="{{$todo->title}}"/>
            <textarea name="description" placeholder="Description">{{$todo->description}}</textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection