<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album example · Bootstrap</title>
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
         </div>
         <div class="form-group">
          <input type="text" class="form-control" placeholder="User name " name='username'>
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

 



  {{-- <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
          href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer> --}}

</body>

</html>