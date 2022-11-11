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
      <br>
      <button class="btn-user btn-chatlist">Chat List</button>
      <br>
      <a href="/clear-messages">
        <button class="btn-user btn-clearchat" onclick="return confirm('Are you sure you want to delete the chat contents for everyone?')">Clear Messages</button>
      </a>
      <a href="/clear-conversations">
        <button class="btn-user btn-clearconversations" onclick="return confirm('Are you sure you want to delete all conversations for everyone?')">Clear Chats</button>
      </a>
    </div>
  </div>