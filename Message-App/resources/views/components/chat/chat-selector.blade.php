<div class="chat-selector chat-selector{{$window->id}}" onclick="localStorage.setItem('activeChat', {{$window->id}}), window.location.reload()">
    <span>{{$window->name}}</span>
    <span class="chat-selector-cross">
        <form action="close-chat" method="post">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$window->id}}">
            <input class="chat-selector-cross" type="submit" value="X" onclick="window.location.reload()">
        </form>
    </span>
</div>