@extends('layouts.app')
@if (!Auth::guest())
@section('content')
<script src="{{ asset('js/custom.js') }}" defer></script>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Expertise List</div>
                <div class="input-group">
                    
                  </div>
                  

                <div class="card-body">
                    <div class="row pl-5">
                        @include('users.list', ['users'=>$users])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection