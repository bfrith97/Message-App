<div class="modal-background"></div>
<div class="user-modal card mt-5">
    <h5 class="card-header">Edit your profile:</h5>
    <form action="/update-user" class="user-form m-1" method="POST">
        @csrf
        <div class="user-name card-body">
            <label class="user-label" for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ucwords(auth()->user()->name)}}">
            <label class="user-label" for="img">Profile Picture URL:</label>
            <input type="text" name="img" id="img" value="{{ucwords(auth()->user()->img)}}">
            <label class="user-label" for="bio">Bio:</label>
            <textarea name="bio" id="bio" cols="30" rows="10">{{(auth()->user()->bio)}}</textarea>
            <label class="user-label" for="chat_colour">Chat colour:</label>
            <input class="colour-picker" type="color" name="chat_colour" id="chat_colour"
                   value="{{auth()->user()->chat_colour}}">
            <input type="submit" value="Save changes" class="btn btn-success btn-sm">
            <button type="button" class="btn-danger btn btn-sm user-window-close">Close window</button>
        </div>
    </form>
</div>
