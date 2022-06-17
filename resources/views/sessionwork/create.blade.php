@extends('layout.layout')
@section('content')
 <div class="add-member">
    @foreach($errors->all() as $err)
      <li>{{$err}}</li>
      @endforeach
      <h3><u>Add new Team Member</u></h3>
  <form action="{{route('sn_str')}}" method="post">
  @csrf
<input type="text" name="name" placeholder="name" value="{{old('name')}}"/>
<input type="email" name="email" placeholder="E-mail" value="{{old('email')}}"/>
<button type="submit">Submit</button>
</form>
<a href="{{route('display')}}">List of members</a>
<a href="{{route('home')}}">Home</a>
 </div>   
@endsection