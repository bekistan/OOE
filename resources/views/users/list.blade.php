@if (!Auth::guest())
@if($users->count())
    @foreach($users as $user)
        <div class="a col-2 profile-box border p-1 rounded text-center bg-light mr-4 mt-3">
            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar" class="">
            <h5 class="m-0"><a href="{{ route('user.view', $user->id) }}"><strong>{{ $user->name }}</strong></a></h5>
            <p class="mb-2">
                <small>Following:{{ $user->followings()->count() }}  </small>
                <small>Followers:{{ $user->followers()->get()->count() }}   </small>
            </p>
            <button class="btn btn-warning btn-sm action-follow" onClick="window.location.reload();" data-id="{{ $user->id }}"><strong>
            @if(auth()->user()->isFollowing($user))
                UnFollow
            @else
                Follow
            @endif
            </strong></button>
        </div>
    @endforeach
@endif
@endif
<style>
    img{
        width: 70%;
        height: 40%;
    }
</style>