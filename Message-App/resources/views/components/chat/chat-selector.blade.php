<div class="chat-selector chat-selector{{$window->id}}" onclick="localStorage.setItem('activeChat', {{$window->id}}), window.location.reload()">
    <span>{{$window->name}}</span>
    <span class="chat-selector-cross">
        <form action="close-chat" method="post">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$window->id}}">
            <input type="submit" value="X" onclick="localStorage.setItem('activeChat', 0), window.location.reload()">
        </form>
    </span>
</div>