@include('layouts.app')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Ml: Info Generation</title>

    </head>

    <body>
        <div class="container div a">
            <div class="form-group">
                <h1 class="">Search Anything </h1>
            </div>
        <div class="form-group">
            <form method="POST" action="{{route('result')}}">
                @csrf
                <label class=""> information about:</label><br><br>
                <input class="form-control" type="text" name="topic" placeholder="topic:">
                <br><br>
                <button class="btn btn-warning">Generation</button>
            </form>
        </div>
        

@if (isset($result))
<h3 class="">Output:</h3>
<div class="container">
    <p class="">{{$result}}</p> 
</div>

@endif
</div>
    </body>
</html>

<style>
    .a{
        margin-top:10%;
    }
</style>
