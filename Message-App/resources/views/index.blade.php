<x-head />

    <x-chat.user-modal/>
    <div class="container-parent">
      <x-chat.container-left/>

      <div class="container-chat">
        <div class="user-details"></div>

        <div class="main-title">Web Messenger</div>
        <div class="selectors-bar">
          <div class="chats-selectors">
            @if (count($activeConversations) < 1)
                <div class="chat-selector-default">
                  <span>Please join a chat!</span>
              </div>
            @else
              @foreach ($activeConversations as $conversation)
              <x-chat.chat-selector :window="$conversation" :active="'active'"/>
              @endforeach
            @endif
            </div>
            
            <form class="new-chat" action="new-chat" method="POST">
              @csrf
              <input class="new-chat-btn" type="button" value="+">
            </form>
          </div>
        
        <div class="chat-box">
          @foreach ($conversations as $conversation)
            <x-chat.window :conversations="$conversations" :window="$conversation->id" :userBlocks="$userBlocks" :blocksArray="$blocksArray"/>
            <x-chat.message-form :window="$conversation->id"/>
          @endforeach
        </div>

      </div>
      @foreach ($conversations as $conversation)
        <x-chat.chat-members :conversations="$conversations" :array="$conversation->id - 1" :window="$conversation->id" :messages="$messages" :blocksArray="$blocksArray"/>
      @endforeach

    </div>
    <div class="modal-background"></div>
    <x-chat.chat-list :conversations="$conversations" :messages="$messages"/>
<x-footer />