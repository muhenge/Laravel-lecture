@extends('task.layout')
@section('content')
<form>
    <label for>Title:</label>
    <input type="text" name="title" value="{{ $task->title }}"/></br>
    <label for>Description:</label>
    <input type= "text" name="description" value="{{ $task->description }}" />
</form>
@endsection