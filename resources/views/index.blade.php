@extends('layout.layout')
@section('content')


<div class="list-members">
    <ul>
        @foreach ($members as $item)
        <li>{{$item}}</li>    
        @endforeach
    </ul>
    <a href="{{route('member.create')}}">Add Member</a>
     <a href="{{route('search')}}">Search a Member</a>
</div>
@endsection