<div class="chat-list-window">
    <div class="list-title">Chat list:</div>
      <div class="list-grid">
        @foreach ($conversations as $conversation)
        <div class="grid-row">
          <h3 class="grid-key">
            <form action="update-chat" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{$conversation->id}}">
                <input type="text" name="name" id="name" value="{{$conversation->name}}">
                <input class="submit-chat-btn" type="submit" value="Change name">
            </form>
        </h3>
          <div class="chat-list-item"></div>
          <ul>
            <u>Chat members</u>
            @foreach ($conversation->participants as $participant)
              <li>{{explode(' ', $participant->name)[0]}} - ({{$messages->where('user_id', $participant->id)->where('conversation_id', $conversation->id)->count()}})</li>
            @endforeach
          </ul>
          <ul>
            <u>Total Messages</u>
            <li>{{$conversation->message->count()}}</li>
          </ul>
        </div>
        @endforeach
        <button type="button" class="list-window-close">Close window</button>
      </div>
  </div>