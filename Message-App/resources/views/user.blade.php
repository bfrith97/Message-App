<x-head/>

<div class="user-parent">
    <div class="card w-25 mx-auto">
        <div class="card-header d-flex justify-content-between p-0">
            <h6 class="ps-3 pt-2">User Profile</h6>
            <a class="user-exit-btn btn-secondary btn btn-sm" href="/">Return to chat</a>
        </div>
        <div class="card-body">
            <img class="user-image mx-auto d-flex justify-center" src="{{$user->img}}" alt="">
            <div class="mt-3 pt-3 border-top" style="border-color: rgba(117,117,117,0.49) !important;">
                <p><strong>Name:</strong> {{$user->name}}</p>
                <p><strong>Email:</strong> {{$user->email}}</p>
                <br>
                <p><strong>Bio:</strong> {{$user->bio == '' ? 'This user has no bio.' : $user->bio}}</p>
            </div>
        </div>
        @if ($user->id != auth()->user()->id)
            @if (isset($blocked))
                @if($blocked == false)
                    <form class="mx-auto mb-2" action="/block-user" method="post">
                        @csrf
                        <input type="hidden" name="targetuser" id="targetuser" value="{{$user->id}}">
                        <input type="hidden" name="user" id="user" value={{auth()->user()->id}}>
                        <input class="btn btn-danger btn-sm" type="submit" value="Block user">
                    </form>
                @else
                    <form class="mx-auto mb-2" action="/unblock-user" method="post">
                        @csrf
                        <input type="hidden" name="targetuser" id="targetuser" value="{{$user->id}}">
                        <input type="hidden" name="user" id="user" value={{auth()->user()->id}}>
                        <input class="btn btn-success btn-sm" type="submit" value="Unblock user">
                    </form>
                @endif
            @else
                <form class="mx-auto mb-2" action="/block-user" method="post">
                    @csrf
                    <input type="hidden" name="targetuser" id="targetuser" value="{{$user->id}}">
                    <input type="hidden" name="user" id="user" value={{auth()->user()->id}}>
                    <input class="btn btn-danger btn-sm" type="submit" value="Block user">
                </form>
            @endif
        @endif
    </div>
</div>
<x-footer/>
