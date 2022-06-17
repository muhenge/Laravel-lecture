@extends('demo.includes.main')
@section ('content')
    
<div class="row">
    <div class="col-xl-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">Session and Database Comparison</h4>
                <h4 class="float-right">
                    <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center"><i class="fa fa-calendar-plus-o"></i> Add Task</button>
                </h4>
                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0 text-primary">Check Session if saved, if not save</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('addSession') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Any Capital City</label>
                                        <input type="text" name="city" class="form-control" required placeholder="Type something"/>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Check session
                                            </button>
                                            <button type="reset" class="btn btn-danger waves-effect m-l-5" data-dismiss="modal" aria-label="Close">
                                                Cancel
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>City</th>
                                <th>Time Registered</th>
                            </tr>

                        </thead>
                        <tbody>
                            
                        <?php $i = 0; ?>
                        @foreach ($city as $row)
                        <?php $i++; ?>
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $row->city }}</td>
                            <td>{{ $row->created_at }}</td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection