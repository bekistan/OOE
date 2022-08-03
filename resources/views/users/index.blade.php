@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="p-3 mb-2 bg-primary text-white">Hope We be of great service
                        Click 
                        <a href="http://localhost/OOE/public"><button class="btn btn-success">Home Page</button></a>
                        to visit the website
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
