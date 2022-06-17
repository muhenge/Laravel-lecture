@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>District</h3></div>

                <div class="card-body">
                    <form action="{{ route('challenge') }}">
                        {{-- @csrf --}}
                        <input type="text" class="form-control" placeholder="Enter any name" required name="kacyiru">
                        <input type="submit" class="btn btn-primary" value="Check">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
