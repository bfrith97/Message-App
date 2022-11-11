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
    </div>
</div>
<x-footer />