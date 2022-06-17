@extends('demo.includes.main')
@section('content')
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
                                            
                            <div class="text-danger">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}
                                    @endforeach
                                @endif
                            </div>
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
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- end row -->

@endsection