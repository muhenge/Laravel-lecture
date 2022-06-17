@extends('demo.includes.main')
@section ('content')

<div class="row">
    <div class="col-lg-10">
        <div class="card m-b-30">
            <div class="card-body">

                <h4 class="mt-0 header-title">ToDo List</h4>
                <p class="text-muted m-b-30 font-14">This list is arranged from 
                    <code>&lt;Latest&gt;</code>.
                </p>
                <p>
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".bs-example-modal-center">Add New Task</button>
                </p>
                
                <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0 text-primary">Add Event on Todo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('addTask') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required placeholder="Type something"/>
                                    </div>
                                    <div class="m-t-20 form-group">
                                        <h6 class="text-muted"><b>Description</b></h6>
                                        <textarea id="textarea" name="desc" class="form-control" maxlength="350" rows="5" placeholder="This textarea has a limit of 350 chars."></textarea>
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
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <div class="table-responsive">
                    <div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        @endif
                    </div>
                    <table class="table mb-0">
                        <thead class="thead-default">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($result as $row)
                            <tr>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->description }}</td>
                                <td>
                                    <a href="{{ route('edit') }}/{{ $row->id }}">Edit</a>&nbsp;&nbsp;<a href="{{ route('delete') }}/{{ $row->id }}" class="text-danger" onclick="javascript:return confirm('are you sure?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
@endsection