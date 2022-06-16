@extends('layout.layout')
@section('content')
 <div class="add-member">
  <ul>
    @foreach ($data as $item)
      <li>
     Name: {{$item->name}}</br>
     Email: {{$item->email}}
    </li>
    <hr/>
  @endforeach
  </ul>
 </div>   
@endsection