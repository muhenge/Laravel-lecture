@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ route('taskstore') }}" method="POST">
                        @csrf
            
                        <div class="row mb-3">
                            <label for="name" class="col-md-2 col-form-label text-md-end">Task</label>
                            <div class="col-md-6">
                                <input type="text" value="{{ old('task') }}" class="form-control @error('task') is-invalid @enderror" name="task">                               
                            </div>
                            @error('task')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <div class="row mb-3">
                            <label for="name" class="col-md-2 col-form-label text-md-end">Description</label>
                            <div class="col-md-6">
                                <textarea name="desc" cols="30" rows="6" class="form-control @error('desc') is-invalid @enderror">{{ old('desc') }}</textarea>
                            </div>
                            @error('desc')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
            
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-success">Register</button>
                                {{-- <a href="{{ route('task') }}"><button type="submit" class="btn btn-primary" style="margin-left: 2rem">Back</button></a> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
