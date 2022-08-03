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
                    <hr>
                    <br>
                    <a href="http://localhost/OOE/public/dashboard"><button class="btn btn-success form-control">DATAS</button></a>
                    <br>
                    <hr>
                    <a href="http://localhost/OOE/public/admin/view"><button class="btn btn-success form-control">Expertise Certeficate</button></a>
                    <br>
                    <hr>
                    <a href="http://localhost/OOE/public/admin/feedback"><button class="btn btn-success form-control">Feedbacks</button></a>
                    <br>
                    <hr>
                    <a href="http://localhost/OOE/public/admin/multimedias"><button class="btn btn-success form-control">Posted Multimedias</button></a>
                    <br>
                    <hr>
                    <a href="http://localhost/OOE/public/admin/books"><button class="btn btn-success form-control">Posted Books</button></a>
                    <br>
                    <hr>
                    <a href="http://localhost/OOE/public/admin/payment"><button class="btn btn-success form-control">Payment List</button></a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
