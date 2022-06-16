@extends('layout.layout')
@section('content')
 <div class="add-member">
    @if (count($errors)>0)
      {{$errors}}
    @endif
    
  <form action="{{route('sn_str')}}" method="post">
  @csrf
<input type="text" name="name" placeholder="name"/>
<input type="email" name="email" placeholder="E-mail"/>
<button type="submit">Submit</button>
</form>
 </div>   
@endsection