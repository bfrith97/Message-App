<x-head />

<div class="user-parent">
    <a class="user-exit-btn" href="/">Return to chat</a>
    <div class="user-box">
        <img class="user-image" src="{{$user->img}}" alt="">
        <div class="user-information">
            <p class="user-information-object"><strong>Name:</strong> {{$user->name}}</p>
            <p class="user-information-object"><strong>Email:</strong> {{$user->email}}</p>
            <br>
            <p class="user-information-bio">{{$user->bio}}</p>
        </div>
        
        @if ($user->id != auth()->user()->id) 
            <form action="/block-user" method="post">
                @csrf
                <input type="hidden" name="targetuser" id="targetuser" value="{{$user->id}}">
                <input type="hidden" name="user" id="user" value={{auth()->user()->id}}>
                <input class="block-btn" type="submit" value="Block user">
            </form>
        @endif
    </div>
</div>
<x-footer />