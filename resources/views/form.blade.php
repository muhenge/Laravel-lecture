<!DOCTYPE html>
<html>
<head>
	  <title>Test form</title>
	  <meta charset="utf-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="card bg-info">
          <div class="card-body text-center text-white bg-primary"><h1>Form</h1></div>
          <div class="card-body">
            <form class="form-group" action="{{route('data')}}">

              <div class="row">
                <div class="col-md-12"><input type="text" name="firstname" class="form-control" placeholder="Enter Firstname" autofocus></div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12"><input type="test" name="lastname" class="form-control" placeholder="Enter Lastname"></div>
              </div>
              <br>

              <br>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><button type="submit" class="form-control btn btn-primary">Save<i class="fa fa-unlock-alt fa-fw"></i></button></div>
                <div class="col-md-4"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  <!--end of container-->
  </div>
</body>
</html>