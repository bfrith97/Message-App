<div class="d-flex p-2 pe-0 me-1 text-nowrap d-flex justify-content-between btn btn-secondary border-bottom-0 border-top-0 chat-selector chat-selector{{$window->id}}" style="height: 2.5rem; border-radius: 0" onclick="localStorage.setItem('activeChat', {{$window->id}}), window.location.reload()">
    <span>{{$window->name}}</span>
    <span class="m-0 ps-3">
        <form action="close-chat" method="post">
            @csrf
            <input type="hidden" name="id" id="id" value="{{$window->id}}">
            <input class="ms-1 btn" style="height: 1.5rem; line-height: 0" type="submit" value="X" onclick="window.location.reload()">
        </form>
    </span>
</div>
