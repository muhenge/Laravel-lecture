@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3 class="card-title"><h3 style="float:left">Your Task</h3><a href="{{ route('createTask') }}">
                    <button class="btn btn-primary" style="float:right">New Task</button></a></h3></div>

                <div class="card-body">
                    
                    <table class="table table-condensed table-hover">
                        <thead>
                            @if (session('success'))
                               <tr>
                                <td colspan="3">
                                    <div class="alert bg-green">
                                        {{ session('success') }}
                                      </div>
                                </td>
                               </tr>
                                @endif
                            <tr>
                            <th >N <sup>o</sup></th>
                            <th>Task</th>
                            <th>Description</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @forelse ($tasks as $task)
                            <tr >
                            <td>{{ $i++ }}</td>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>
                                <a href="{{ route('taskEdit', $task->id) }}"><button class="btn btn-info">Update</button></a>
                                <a onclick="return confirm('Are you sure you want to delete?')" href="{{ route('taskDelete', $task->id) }}"><button class="btn btn-danger">Delete</button></a>
                            </td>
                            
                            </tr>
                            @empty
                            <tr><td colspan="3" >
                                <center><h5 style="color:red; size:24px;">No task found in database.</h5></center>    
                            </td></tr>
                     @endforelse
                        </tbody>
                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
