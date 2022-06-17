@extends('layout.layout')
@section('content')
 <div class="list-member">
  <a  href="{{route('sn_sv')}}">Add New</a> ||
  <a  href="{{route('home')}}">Home</a> ||
  <div class="message">{{Session::get('msg')}}</div>
    @foreach ($data as $item)
    <div >
     Name: {{$item->name}}</br>
     Email: {{$item->email}}

    <form action="{{route('delete',$item->id)}}" method="post">
      @csrf
      @method('DELETE')
     <button><a href="{{route('edit',$item->id)}}">Edit</a></button>
      <button type="submit">Delete</button>
    </form>
      </div>
    <hr/>
  @endforeach
 </div>   
@endsection