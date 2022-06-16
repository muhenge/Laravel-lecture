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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<body>
      <div class="container">
       <div class="row">
        <div class='col-6'>
      <div class='card'>
       <div class='card-header bg-primary' style='color:#fff'>Task Registration</div>
       <div class='card-body'>
        <form action="{{'creat'}}" method='POST'>
         @if(Session::get('success'))
         <div class='alert alert-success'>
          {{
           Session::get('success','default');
          }}

          @endif
         </dv>
          @if(Session::get('fail'))
          <div class='alert alert-danger'>
          
            {{Session::get('fail')}}
           
         </div>
         @endif
         @csrf
         <div class="form-group">
           <label for=""> Title</label>
         </div>
         <div class="form-group">
          <textarea  cols='12' rows='1' class="form-control" placeholder="Task Title" value="{{old('title')}}" name='title'></textarea>
          <span class="text-danger">@error('title'){{$message}}
           @enderror</span>
         </div>
         <div class="form-group">
          <label for="my-input">Description</label>
          <textarea cols='12' rows='3' type="text" class="form-control" placeholder="job Description" name='description' value="{{old('description')}}" ></textarea>
          <span class="text-danger">@error('description'){{$message}}
           @enderror</span>
         </div>
         .<div class="form-group">
          
          <input class="btn btn-primary" type="submit" name="save">
         </div>
        </form>
       </div>
       </div>
       </div>
       </div>
      </div>

</body>

</html>