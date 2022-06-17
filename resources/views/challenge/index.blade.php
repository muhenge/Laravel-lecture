<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>District</title>
    <link href="{{ asset('bootstrap.css') }}" rel="stylesheet">
</head>
<body><br>
    <div class="card-header">
        <h3 class="card-title"><h3 style="float:left">District</h3>
        <a href="{{ route('challengeForm') }}"><button class="btn btn-primary" style="float:right">New District</button></a>
        </h3>
      </div>
    <table class="table table-condensed table-hover" style="margin-left: 3rem">
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
            <th>Name</th>
            <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            @php
                $i = 1;
            @endphp
            @forelse ($challenges as $challenge)
            <tr >
            <td>{{ $i++ }}</td>
            <td>{{ $challenge->name }}</td>
            <td><a href="{{ route('challengeEdit',$challenge->id) }}"><button class="btn btn-info">Update</button></a>
                <a onclick="return confirm('Are you sure you want to delete?')" href="{{ route('challengeDelete', $challenge->id) }}"><button class="btn btn-danger" style="margin-left: 1rem">Delete</button></a>
            </td>
            </tr>
            @empty
            <tr><td colspan="3" >
                <center><h5 style="color:red; size:24px;">No district found in database.</h5></center>    
            </td></tr>
     @endforelse
        </tbody>
     </table>
</body>
</html>