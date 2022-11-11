<x-head />

    <x-chat.user-modal/>
    <div class="container-parent">
      <x-chat.container-left/>

      <div class="container-chat">
        <div class="user-details"></div>

        <div class="main-title">Web Messenger</div>
        <div class="selectors-bar">
          <div class="chats-selectors">
            @foreach ($conversations as $conversation)
            <x-chat.chat-selector :window="$conversation"/>
              @endforeach
            </div>
            
            <form class="new-chat" action="new-chat" method="POST">
              @csrf
              <input class="new-chat-btn" type="submit" value="+">
            </form>
          </div>
        
        <div class="chat-box">
          @foreach ($conversations as $conversation)
            <x-chat.window :conversations="$conversations" :window="$conversation->id"/>
            <x-chat.message-form :window="$conversation->id"/>
          @endforeach
        </div>

      </div>
      @foreach ($conversations as $conversation)
        <x-chat.chat-members :conversations="$conversations" :array="$conversation->id - 1" :window="$conversation->id"/>
      @endforeach

    </div>
    <div class="modal-background"></div>
    <div class="chat-list-window">
        <div class="list-title">Chat list:</div>
          <div class="list-grid">
            @foreach ($conversations as $conversation)
            <div class="grid-row">
              <h3 class="grid-key">{{$conversation->name}}</h3>
              <div class="chat-list-item"></div>
              <ul>
                <u>Chat members</u>
                @foreach ($conversation->participants as $participant)
                <li>{{$participant->name}} </li>
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
<x-footer />