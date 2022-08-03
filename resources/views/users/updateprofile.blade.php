@include('layouts.app')
@if (!Auth::guest())
<div class="row">
   <div class="a col-md-6">
    
    <br>
    <div class="card">
        <div class="card-header">Update Profile</div>
        <div class="card-body">
            @foreach ($user as $item)
          
            {!! Form::open(['action'=>['App\Http\Controllers\ProfileupdateController@update',$item->id],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
            {{Form::hidden('_method','PUT' )}}
            
            
            <div class="form-group">
                {{Form::label('name','Name')}}
                {{Form::text('name','',['class'=>'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('email','Email')}}
                {{Form::text('email','',['class'=>'form-control'])}}
            </div> 
            <div class="form-group">
                {{Form::label('profession','Proffession')}}
                {{Form::text('profession','',['class'=>'form-control'])}}
            </div> <div class="form-group">
                {{Form::label('phone','Phone Number')}}
                {{Form::text('phone','',['class'=>'form-control'])}}
            </div> <div class="form-group">
                {{Form::label('address','City')}}
                {{Form::text('address','',['class'=>'form-control'])}}
            </div> <div class="form-group">
                {{Form::label('edu_status','Educational Status')}}
                {{Form::text('edu_status','',['class'=>'form-control'])}}
            </div> 
                <br>
            <div class="form-group">
                {{Form::submit('Update ',['class'=>'btn btn-warning form-control'])}}
             {!! Form::close() !!}
                   
            @endforeach
                 </div>
        
        </div>
    
    </div>
   </div>
</div>

    
@else
<div class="card-header">
    <div class="card-body">
        <h4>You Must be logged in</h4>
    </div>
</div>
    

@endif
<style>
    .a{
        margin-top: 5%;
        margin-left: 25%;
  box-shadow: 0 4px 8px 0 rgba(241, 213, 0, 0.678), 0 6px 20px 0 rgba(216, 231, 6, 0.614);
   }

</style>




