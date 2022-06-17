@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>District</h3></div>

                <div class="card-body">
                    <h1>{{ Session::get('kigali') }}</h1><br>
                    <form action="{{ route('challengeStore') }}">
                        <input type="hidden" value="{{ Session::get('kigali') }}" name="kLab"><br>
                    <input type="submit" class="btn btn-info" name="Submit" value="Store">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
