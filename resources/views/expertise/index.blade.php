@include('layouts.app')

@extends('expertise.sidebar')
@if (!Auth::guest())

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <br>
        <div class="container col-md-6">
            <div class="mb-5">
            Uploaded Certeficates
            </div>
            @foreach ($certeficate as $item)
            <img id="frame" src="http://localhost/OOE/public/storage/certeficates/{{$item->certeficate}}" class="img-fluid" />
            <br>
            <br>
            <a href="http://localhost/OOE/public/certeficate/{{$item->id}}/edit"><button class="btn btn-warning form-control">Edit</button></a>
            @endforeach
            
        </div>

    
    </body>
    @endif
 