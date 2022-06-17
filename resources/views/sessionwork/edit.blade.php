@extends('layout.layout')
@section('content')

 <div class="edit-member">
    @if (count($errors)>0)
      {{$errors}}
    @endif
    <h3><u>Update a Team Member</u></h3>
  <form action="{{route('update',$member->id)}}" method="post">
  @csrf
  @method('PATCH')
<input type="text" name="name" value="{{$member->name }}"/>
<input type="email" name="email" value="{{$member->email}}"/>
<button type="submit">Submit</button>
</form>
<a href="{{route('display')}}">List of members</a>

 </div>   
@endsection