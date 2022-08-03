@include('layouts.app')
@extends('expertise.sidebar')
@if (!Auth::guest())
<div class="form-control container a">
{!! Form::open(['action'=>'App\Http\Controllers\MultimediasController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('multimedia','Upload Multimedia File')}}
        {{Form::file('multimedia',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('cover','Upload Cover')}}
        {{Form::file('cover',['class'=>'form-control'])}}
    </div>
    <div class="form-group">
        {{ Form::label('type') }}
        {{ Form::select('type' , ['audio' => 'Audio','video' => 'Video'] ,'User', ['class'=>'form-control', 'placeholder'=>'Please select ...']) }}
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
@endif
<style>
.a{
    width: 50%;
    margin-top: 5%;
    padding:5%;
}