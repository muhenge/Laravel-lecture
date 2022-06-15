@extends('layout.layout')
@section('content')
 <div class="add-member">
    <form action="{{route('member.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="First name"/>
        <button type="submit">Save</button>
    </form>
     <a href="{{route('member.index')}}">List of Members</a>
     <a href="{{route('search')}}">Search a Member</a>
 </div>   
@endsection