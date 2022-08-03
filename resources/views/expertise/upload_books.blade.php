@include('layouts.app')
@if (!Auth::guest())

@extends('expertise.sidebar')

<div class="form-control container a">
{!! Form::open(['action'=>'App\Http\Controllers\PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('book','Upload Book')}}
        {{Form::file('book',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('cover','Upload Cover')}}
        {{Form::file('cover',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('type') }}
        {{ Form::select('type' , ['psychology' => 'Psychology','educational' => 'Educational','fiction' => 'Fiction'] ,'User', ['class'=>'form-control', 'placeholder'=>'Please select ...']) }}
    </div>
    <div class="form-group">
        {{Form::label('details','Description')}}
        {{ Form::textarea('details' , '', ['class'=>'form-control', 'placeholder'=>'Enter Description']) }}
    </div>
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{ Form::text('title' , '', ['class'=>'form-control', 'placeholder'=>'Enter Title']) }}
    </div>
    <hr>
    <div class="form-group">
   {{Form::submit('Upload',['class'=>'btn btn-warning form-control'])}}
{!! Form::close() !!}
    </div>
</div>

@else
    
<div class="card">
    <p>You must be logged in</p>
</div>
@endif

<style>
.a{
    width: 50%;
    margin-top: 5%;
    padding:5%;
}
</style>