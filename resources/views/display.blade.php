@extends('layout.layout')
@section('content')
 <div class="add-member">
  <div class="message">{{Session::get('msg')}}</div>
  <ul>
    @foreach ($data as $item)
      <li>
     Name: {{$item->name}}</br>
     Email: {{$item->email}}
    </li>
    <a href="{{route('edit',$item->id)}}">EDIT</a>
    <form action="{{route('delete',$item->id)}}" method="post">
      @csrf
      @method('DELETE')
      <button type="submit">Delete</button>
    </form>
    <hr/>
  @endforeach
  </ul>
 </div>   
@endsection