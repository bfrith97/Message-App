<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >


    <title>Messages</title>
  </head>

  <body>
    {{-- {{Session::put('activeChat', 1)}}
    {{dd(Session::get('activeChat'))}} --}}
    <div class="modal-background"></div>
    <div class="user-modal">
      <div class="user-title">Edit your profile:</div>
      <form action="/update-user" class="user-form" method="POST">
        @csrf
        <div class="user-name">
          <label class="user-label" for="name">Name:</label>
          <input type="text" name="name" id="name" value="{{ucwords(auth()->user()->name)}}">
          <label class="user-label" for="chat_colour">Chat colour:</label>
          <input class="colour-picker" type="color" name="chat_colour" id="chat_colour" value="{{auth()->user()->chat_colour}}" >
          <input type="submit" value="Save changes" class="user-submit">
        </div>
        <button type="button" class="user-window-close">Close window</button>
      </form>
    </div>
    <div class="container-parent">
      <div class="container-user container-user-left">
        <div class="user-hints">
          <p class="user-hint"><</p>
          <p class="user-hint"><</p>
          <p class="user-hint"><</p>
          <p class="user-hint"><</p>
          <p class="user-hint"><</p>
          <p class="user-hint"><</p>
          <p class="user-hint"><</p>
          <p class="user-hint"><</p>
          <p class="user-hint"><</p>
        </div>
        <div class="user-buttons">
          
          <div class="user-welcome-txt">Welcome,</div>
          <div class="user-welcome-txt">{{ucwords(explode(' ', auth()->user()->name)[0])}}!</div>
          <form action="/logout" method="post">
            @csrf
            <input class="btn-user btn-signout" type="submit" value="Log out">
          </form>
          <button class="btn-user btn-editinfo">Edit User</button>
          <a href="/clear">
            <button class="btn-user btn-clearchat" onclick="return confirm('Are you sure you want to delete the chat contents for everyone?')">Clear Chat</button>
          </a>
        </div>
      </div>

      <div class="container-chat">
        <div class="user-details"></div>
        <div class="main-title">Web Messenger</div>
        <div class="chats-selectors">
          <div class="chat-selector chat-selector1" onclick="localStorage.setItem('activeChat', 1), window.location.reload()">Chat 1</div>
          <div class="chat-selector chat-selector2" onclick="localStorage.setItem('activeChat', 2), window.location.reload()">Chat 2</div>
          <div class="chat-selector chat-selector3" onclick="localStorage.setItem('activeChat', 3), window.location.reload()">Chat 3</div>
          <div class="chat-selector chat-selector4" onclick="localStorage.setItem('activeChat', 4), window.location.reload()">Chat 4</div>
        </div>
        <div class="chat-box">
          <div class="chat-window chat-window1">
            <div class="message-top">
              @foreach ($conversations as $conversation)
                @foreach ($conversation->message as $message)
                    @if ($message->conversation_id == 1)
                      <div class="message-label-{{$message->user_id == Auth::id() ? 'one' : 'two'}}">{{$message->user_id == Auth::id() ? 'You' : ucwords(explode(' ', $message->user->name)[0])}}</div>
                      <div class="message-user-{{$message->user_id == Auth::id() ? 'one' : 'two'}}" style="{{'background-color:' . $message->user->chat_colour}}">{{$message->content}}</div>
                    @endif
                @endforeach
              @endforeach
            </div>
          </div>
          <div class="chat-window chat-window2">
            <div class="message-top">
              @foreach ($conversations as $conversation)
              @foreach ($conversation->message as $message)
                  @if ($message->conversation_id == 2)
                    <div class="message-label-{{$message->user_id == Auth::id() ? 'one' : 'two'}}">{{$message->user_id == Auth::id() ? 'You' : ucwords(explode(' ', $message->user->name)[0])}}</div>
                    <div class="message-user-{{$message->user_id == Auth::id() ? 'one' : 'two'}}" style="{{'background-color:' . $message->user->chat_colour}}">{{$message->content}}</div>
                  @endif
              @endforeach
            @endforeach
            </div>
          </div>
          <div class="chat-window chat-window3">
            <div class="message-top">
              @foreach ($conversations as $conversation)
              @foreach ($conversation->message as $message)
                  @if ($message->conversation_id == 3)
                    <div class="message-label-{{$message->user_id == Auth::id() ? 'one' : 'two'}}">{{$message->user_id == Auth::id() ? 'You' : ucwords(explode(' ', $message->user->name)[0])}}</div>
                    <div class="message-user-{{$message->user_id == Auth::id() ? 'one' : 'two'}}" style="{{'background-color:' . $message->user->chat_colour}}">{{$message->content}}</div>
                  @endif
              @endforeach
            @endforeach
            </div>
          </div>
          <div class="chat-window chat-window4">
            <div class="message-top">
              @foreach ($conversations as $conversation)
              @foreach ($conversation->message as $message)
                  @if ($message->conversation_id == 4)
                    <div class="message-label-{{$message->user_id == Auth::id() ? 'one' : 'two'}}">{{$message->user_id == Auth::id() ? 'You' : ucwords(explode(' ', $message->user->name)[0])}}</div>
                    <div class="message-user-{{$message->user_id == Auth::id() ? 'one' : 'two'}}" style="{{'background-color:' . $message->user->chat_colour}}">{{$message->content}}</div>
                  @endif
              @endforeach
            @endforeach
            </div>
          </div>
          <form action="/send" method="post" class="message-form form1">
            @csrf
            <input  type="hidden" id="conversation" name="conversation" value="1">
            <input  type="hidden" id="user" name="user" value="{{auth()->user()->id}}">
            <input class="message-content" type="text" id="content" name="content" autofocus>
            <input type="submit" value="Submit" onkeypress="return checkSubmit(event">
          </form>
          <form action="/send" method="post" class="message-form form2">
            @csrf
            <input  type="hidden" id="conversation" name="conversation" value="2">
            <input  type="hidden" id="user" name="user" value="{{auth()->user()->id}}">
            <input class="message-content" type="text" id="content" name="content" autofocus>
            <input type="submit" value="Submit" onkeypress="return checkSubmit(event">
          </form>
          <form action="/send" method="post" class="message-form form3">
            @csrf
            <input  type="hidden" id="conversation" name="conversation" value="3">
            <input  type="hidden" id="user" name="user" value="{{auth()->user()->id}}">
            <input class="message-content" type="text" id="content" name="content" autofocus>
            <input type="submit" value="Submit" onkeypress="return checkSubmit(event">
          </form>
          <form action="/send" method="post" class="message-form form4">
            @csrf
            <input  type="hidden" id="conversation" name="conversation" value="4">
            <input  type="hidden" id="user" name="user" value="{{auth()->user()->id}}">
            <input class="message-content" type="text" id="content" name="content" autofocus>
            <input type="submit" value="Submit" onkeypress="return checkSubmit(event">
          </form>
        </div>
      </div>
      <div class="container-members members1">
        <div class="user-chat-info">Chat members</div>
        <ul>
          @foreach (($conversations[0]->participants) as $participant)
                <li>{{ucwords(explode(' ', $participant->name)[0])}}</li>
          @endforeach
        </ul>
        </div>
      <div class="container-members members2">
        <div class="user-chat-info">Chat members</div>
        <ul>
          @foreach (($conversations[1]->participants) as $participant)
                <li>{{ucwords(explode(' ', $participant->name)[0])}}</li>
          @endforeach
        </ul>
        </div>
      <div class="container-members members3">
        <div class="user-chat-info">Chat members</div>
        <ul>
          @foreach (($conversations[2]->participants) as $participant)
                <li>{{ucwords(explode(' ', $participant->name)[0])}}</li>
          @endforeach
        </ul>
        </div>
      <div class="container-members members4">
        <div class="user-chat-info">Chat members</div>
        <ul>
          @foreach (($conversations[3]->participants) as $participant)
                <li>{{ucwords(explode(' ', $participant->name)[0])}}</li>
          @endforeach
        </ul>
        </div>
      </div>
    </body>
  <script src="{{ asset('js/script.js') }}"></script>
</html>
