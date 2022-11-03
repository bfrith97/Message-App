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
    <div class="modal-background"></div>
    <div class="login-modal">
      <div class="login-title">Choose a user to log in as...</div>
      <div class="login-buttons">
        <button class="login-button login-button-one">USER 1</button>
        <button class="login-button login-button-two">USER 2</button>
      </div>
    </div>
    <div class="container-parent">
      <div class="container-user container-user-left">
        <div class="user-welcome-txt">Welcome *user*</div>
        <button class="btn-user btn-signout">Sign out</button>
        <button class="btn-user btn-editinfo">Edit User</button>
        <button class="btn-user btn-clearchat">Clear Chat</button>
      </div>

      <div class="container-chat">
        <div class="user-details"></div>
        <div class="main-title">Web Messenger</div>
        <div class="chats-selectors">
          <div class="chat-selector">Chat 1</div>
          <div class="chat-selector">Chat 2</div>
          <div class="chat-selector">Chat 3</div>
          <div class="chat-selector">Chat 4</div>
        </div>
        <div class="chat-box">
          <div class="chat-window chat-window1 chat-window-active">
            <div class="message-top"></div>
          </div>
          <div class="chat-window chat-window2">
            <div class="message-top"></div>
          </div>
          <div class="chat-window chat-window3">
            <div class="message-top"></div>
          </div>
          <div class="chat-window chat-window4">
            <div class="message-top"></div>
          </div>
          <form class="message-write">
            <textarea class="message-content"></textarea>
            <button class="message-send" input type="button">SEND</button>
          </form>
        </div>
      </div>
      <div class="container-user container-user-right">
        <div class="user-chat-info">Chat members:</div>
        <img
          src="{{ asset('img/user1.jpg') }}"
          alt="User 1's image"
          class="user-image"
        />

        <div class="user-partner-name">Person 1</div>
        <img
          src="{{ asset('img/user2.jpg') }}"
          alt="User 2's image"
          class="partner-image"
        />
        <div class="user-partner-name">Person 2</div>
      </div>
    </div>
  </body>
  <script src="{{ asset('js/script.js') }}"></script>
</html>
