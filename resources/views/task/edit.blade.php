<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Klab- ToDo Assignment</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">

        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="float-right page-breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#">Klab</a></li>
                                            <li class="breadcrumb-item active">Audace</li>
                                        </ol>
                                    </div>
                                    <h5 class="page-title">Techup-skills</h5>
                                </div>
                            </div>
                            <!-- end row -->
                            <div class="row">
                                <div class="col-xl-8">
                                    <div class="card m-b-30 blog-wid">
                                        <div class="card-body">
                                            <h4 class="mt-0 header-title mb-4 float-right">ToDo List</h4>
                                            @foreach ($result as $row)
                                                <form action="{{ route('update') }}" method="POST">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <input type="hidden" name="id" value="{{ $row->id }}">
                                                        <input type="text" name="title" value="{{ $row->title }}" class="form-control" required placeholder="Type something"/>
                                                    </div>
                                                    <div class="m-t-20 form-group">
                                                        <h6 class="text-muted"><b>Description</b></h6>
                                                        <textarea id="textarea" name="desc" class="form-control" maxlength="350" rows="5" placeholder="This textarea has a limit of 350 chars.">{{ $row->description }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5" data-dismiss="modal" aria-label="Close">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->

                        </div><!-- container fluid -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>

        <!-- skycons -->
        <script src="{{asset('assets/plugins/skycons/skycons.min.js')}}"></script>

        <!-- skycons -->
        <script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

        <!-- dashboard -->
        <script src="{{asset('assets/pages/dashboard.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>

        <!-- Plugins js -->
        <script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

        <!-- Plugins Init js -->
        <script src="{{asset('assets/pages/form-advanced.js')}}"></script>

    </body>
</html>