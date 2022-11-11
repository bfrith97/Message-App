<x-head />

    <x-chat.user-modal/>
    <div class="container-parent">
      <x-chat.container-left/>

      <div class="container-chat">
        <div class="user-details"></div>

        <div class="main-title">Web Messenger</div>
        <div class="selectors-bar">
          <div class="chats-selectors">
            
            {{-- {{dd($users[2])}} --}}
            @foreach ($conversations as $conversation)
                {{-- @foreach ($users[$currentUser]->conversations as $userConversation)
                  @if ($conversation->id == $userConversation->id) --}}
                    <x-chat.chat-selector :window="$conversation" :active="'active'"/>
                  {{-- @else
                  @endif
                @endforeach --}}
              @endforeach
            </div>
            
            <form class="new-chat" action="new-chat" method="POST">
              @csrf
              <input class="new-chat-btn" type="button" value="+">
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
        <x-chat.chat-members :conversations="$conversations" :array="$conversation->id - 1" :window="$conversation->id" :messages="$messages"/>
      @endforeach

    </div>
    <div class="modal-background"></div>
    {{-- {{dd($messages)}} --}}
    <x-chat.chat-list :conversations="$conversations" :messages="$messages"/>
<x-footer />