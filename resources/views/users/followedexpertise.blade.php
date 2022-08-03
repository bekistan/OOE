@include('layouts.app')
@if (!Auth::guest())
@foreach ($eid as $item)
<div class="form-control">
       
       <a href="followedexpertise/{{$item->followable_id}}">{{$item->followable_id}}</a>

</div>

@endforeach
@endif