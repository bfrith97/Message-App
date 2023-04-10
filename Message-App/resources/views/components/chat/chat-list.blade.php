<div class="p-3" style="border-color: rgba(117,117,117,0.49) !important; width: 15rem">
    <h6 class="mb-3 text-center"><strong>Chat list</strong></h6>
      <div class="">
        @foreach ($conversations as $conversation)
          <div class="d-flex justify-content-between border-bottom mt-2" style="border-color: rgba(117,117,117,0.49) !important;">
              <h6>
                   {{ $conversation->name }}
              </h6>
              <form action="join-chat" method="POST">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$conversation->id}}">
                <input class="btn btn-secondary btn-sm" style="height: 1.45rem; line-height: 0" type="submit" value="Open" onclick="localStorage.setItem('activeChat', {{$conversation->id}}), window.location.reload()">
              </form>
          </div>
        @endforeach
      </div>
  </div>
