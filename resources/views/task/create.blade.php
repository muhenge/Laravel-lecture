@extends('task.layout')
@section('content')
<form action="{{ route('taskStore') }}" method="POST">
    @csrf
    <label for>Title:</label>
    <input type="text" name="title"/></br>
    <label for>Description:</label>
    <input type= "text" name="description" />
    <button type="submit">Submit</button>
</form>
@endsection
