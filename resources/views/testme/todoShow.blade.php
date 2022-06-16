<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Session Assignment</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<body>
      <div class="wrapper">
       
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark" style='color:#fff;font-size:16px'>
            <a class="navbar-brand" href="#">Klab TakeUp Skills</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home </a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gustave Workon</a>
                        {{-- <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div> --}}
                    </li>
                </ul>
                {{-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form> --}}
            </div>
        </nav>
        <br>
      <div class="container">
       <div class="row">
        
      <div class='col-9'>
      <div class='card'>
       <div class='card-header bg-primary' style='color:#fff;font-size:16px'>Todo List</div>
       @if(Session::get('success'))
      <div class="alert alert-success">
       {{Session::get('success')}}
      </div>
      @endif
       <div class='card-body'>

        <table class="table table-striped table-hover">
         <thead <tr style="font-size:17px">
          <th>Title</th>
          <th>Description</th>
         </thead>
         <tbody>
          @foreach ( $data as $value)
          <tr style="font-size:17px">
           <td id='td'><i class="glyphicon glyphicon-plus-sign bg-primary"></i>
            {{$value->title}}</td>
           <td>{{$value->description}}</td>
          </tr>
          @endforeach
         </tbody>
        </table>
       </div>
       </div>
       </div>
       </div>
      </div>
     </div>
</body>

</html>