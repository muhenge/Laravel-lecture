<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task</title>
    <link href="{{ asset('bootstrap.css') }}" rel="stylesheet">
</head>
<body><br>
    <div class="card-header">
        <h3 class="card-title"><h3 style="float:left">Your Task</h3>
        <a href="{{ route('createTask') }}"><button class="btn btn-primary" style="float:right">New Task</button></a>
        </h3>
      </div>
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
            
            </tr>
            @empty
            <tr><td colspan="3" >
                <center><h5 style="color:red; size:24px;">No Department found in database.</h5></center>    
            </td></tr>
     @endforelse
        </tbody>
     </table>
</body>
</html>