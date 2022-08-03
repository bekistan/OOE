@include('layouts.app')

@if (!Auth::guest())

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <br>
        <div class="container col-md-6">
            <div class="mb-5">
            {!! Form::open(['action'=>'App\Http\Controllers\PaymentController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                {{Form::label('payment','Upload scanned picture of Sent Money')}}
                {{Form::file('payment',['id'=>'formFile','class'=>'form-control','onchange'=>'preview()'] )}}
                {{Form::submit('Upload',['class'=>'btn btn-warning form-control'] )}}
            {!! Form::close() !!}
            </div>
            <img id="frame" src="" class="img-fluid" />
        </div>

        <script>
            function preview() {
                frame.src = URL.createObjectURL(event.target.files[0]);
            }
            function clearImage() {
                document.getElementById('formFile').value = null;
                frame.src = "";
            }
        </script>
    </body>
    @endif
 