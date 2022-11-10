<x-head />

    <x-chat.user-modal/>
    <div class="container-parent">
      <div class="container-user container-user-left">
        <x-chat.hint-left />
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
          <x-chat.window :conversations="$conversations" :window="1"/>
          <x-chat.window :conversations="$conversations" :window="2"/>
          <x-chat.window :conversations="$conversations" :window="3"/>
          <x-chat.window :conversations="$conversations" :window="4"/>
          
          <x-chat.message-form :window="1"/>
          <x-chat.message-form :window="2"/>
          <x-chat.message-form :window="3"/>
          <x-chat.message-form :window="4"/>
        </div>
      </div>
      <x-chat.chat-members :conversations="$conversations" :arrayNum="0" :window="1"/>
      <x-chat.chat-members :conversations="$conversations" :arrayNum="1" :window="2"/>
      <x-chat.chat-members :conversations="$conversations" :arrayNum="2" :window="3"/>
      <x-chat.chat-members :conversations="$conversations" :arrayNum="3" :window="4"/>

      </div>

<x-footer />