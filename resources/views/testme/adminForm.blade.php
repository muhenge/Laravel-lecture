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
      
        <form action="{{'create'}}" method='POST'>
         @csrf
         <div class="form-group">
           <label for=""> UserName</label>
          <input type="text" class="form-control" placeholder="User name "  name='name'>
         </div>
         <div class="form-group">
          <label for=""> UserName</label>
         <input type="email" class="form-control" placeholder="Gustave@gmail.com" name='email'>
        </div>
         <div class="form-group">
          <label for="my-input">password</label>
          <input type="password" class="form-control" name='password' >
         </div>
         .<div class="form-group">
          
          <input class="btn btn-danger" type="submit" name="save">
         </div>
        </form>
       </div>
       </div>
      </div>

</body>

</html>