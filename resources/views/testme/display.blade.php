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
       <div class='col-6 bg-primary'>
        <h2 class=''>UserName:{{Session::get('name')}}</h2>
       </div>
       <div class='col-6 bg-danger'>
        <h3> Your password:{{Session::get('password')}}</h3>
       </div>
       
         
       </div>
       </div>
      </div>

</body>

</html>