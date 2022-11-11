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
        <button type="button" class="user-window-close">Close window</button>
      </div>
    </form>
  </div>