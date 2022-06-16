@extends('layout.layout')
@section('content')
 <div class="add-member">
    @if (count($errors)>0)
      {{$errors}}
    @endif
    
  <form action="{{route('update',$member->id)}}" method="post">
  @csrf
  @method('PATCH')
<input type="text" name="name" value="{{$member->name }}"/>
<input type="email" name="email" value="{{$member->email}}"/>
<button type="submit">Submit</button>
</form>
 </div>   
@endsection