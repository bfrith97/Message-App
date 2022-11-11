<div class="chat-window chat-window{{$window}}">
    <div class="message-top">
      @foreach ($conversations as $conversation)
        @foreach ($conversation->message as $message)
            @if ($message->conversation_id == $window)
              <div class="message-label-{{$message->user_id == Auth::id() ? 'one' : 'two'}}"><a href="users/{{$message->user->id}}">{{$message->user_id == Auth::id() ? 'You' : ucwords(explode(' ', $message->user->name)[0])}}</a></div>
              <div class="message-user-{{$message->user_id == Auth::id() ? 'one' : 'two'}}" style="{{'background-color:' . $message->user->chat_colour}}">{{$message->content}}</div>
            @endif
        @endforeach
      @endforeach
    </div>
  </div>