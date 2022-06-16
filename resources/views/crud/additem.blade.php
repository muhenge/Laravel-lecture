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
    <style>
        div label{
            font-family:bold;
        }
    </style>
</head>
<body>
<br>
<div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
    
          <div cllss="row">
            <div class="col-md-12 text-center">
            <button class="btn btn-danger"><a href="{{url('/viewdata')}}" style="color:white;">Read data</a></button>
            </div>
          </div>
        <br>
        <div class="card bg-info">
          <div class="card-body text-center text-white bg-primary"><h1>Registration form</h1></div>
          <div class="card-body">
            
                <div class="row">
                    <div class="col-md-12">
                        @if(Session::get('success'))
                            <span class="text-danger text-center alert alert-success">{{Session::get('success')}}</span>
                        @endif

                        @if(Session::get('fail'))
                            <span class=" alert alert-success text-danger  text-center">{{Session::get('fail')}}</span>
                        @endif
                    </div>
                </div>

            <form class="form-group" action="{{route('data')}}">
             @csrf
              <div class="row">
                <div class="col-md-12">
                    <label>Firstname</label>
                    <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname"  value="{{old('firstname')}}" autofocus>
                    <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
                </div>

              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                <label>Lastname</label>
                <input type="test" name="lastname" class="form-control" placeholder="Enter Lastname"   value="{{old('lastname')}}">
                <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                    <label>Gender</label>
                    <select name="gender"  class="form-control">
                        <option>Select  . . . </option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <span class="text-danger">@error('gender') {{$message}} @enderror</span>
                </div>
                
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                    <label>Phone</label>
                    <input type="test" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Enter phone number"   value="{{old('phone')}}">
                    <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-md-12">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter email" value="{{old('email')}}" autofocus>
                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                </div>
              </div>
                <br>
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"><button type="submit" class="form-control btn btn-primary">Submit<i class="fa fa-unlock-alt fa-fw"></i></button></div>
                <div class="col-md-4"></div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
    </div>
  <!--end of container-->
  </div>
</body>
</html>