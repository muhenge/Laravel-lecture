@extends('layout.layout')
@section('content')
<div class="find-member">
    <form action="{{route('find')}}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Example: Eugene"/>
        <button type="submit">Search</button>
    </form>
</div>
<div class="found">
    {{$member}}
</div>
 <a href="{{route('member.index')}}">List of Members</a>
 <a href="{{route('member.create')}}">Add Member</a>
@endsection