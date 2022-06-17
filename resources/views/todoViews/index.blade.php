@extends('todoViews.layout.todo_layout')
@section('content')
    <div class="todo-list">
          <a  href="{{route('home')}}">Home</a>

          <h3><u>Create Todo</u></h3>
          <div class="errors">
            @foreach($errors->all() as $err)
            <li>{{$err}}</li>
            @endforeach
          </div>
        <form class="create-form" action="{{route('todo.store')}}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="title"/>
            <textarea name="description" placeholder="Description"></textarea>
            <button type="submit">Submit</button>
        </form>
        <div class="list-todo">

                @foreach ($todos as $item)
                    <div class="item">
                        <h3>{{$item->title}}</h3>
                        <p>{{$item->description}}</p>
                        <form action="{{route('todo.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                      <button><a href="{{route('todo.edit',$item->id)}}">Edit</a></button>
                        <button type="submit">Delete</button>
                        </form>
                    </div>
                    <hr/>
                @endforeach
        
        </div>
    </div>
@endsection