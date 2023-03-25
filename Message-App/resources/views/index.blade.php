<x-head />
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/laravel-echo@1.11.2/dist/echo.iife.min.js"></script>
<script src="{{ asset('js/chat.js') }}"></script>
    <x-chat.user-modal/>
    <div class="container-parent">
      <x-chat.container-left/>

      <div class="card w-50 opacity-75">
        <div class="user-details"></div>

        <div class="card-header text-center pb-0">
            <h6>Web Messenger</h6>
        </div>
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
