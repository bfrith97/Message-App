<div class="container-members members{{$window}}">

    <div class="user-chat-info">
      <h4><u>{{$conversations[$array]->name}}</u></h4>
      <p class="chat-members-title"><b>Chat members</b></p>
    </div>
    <ul>
      @if ($conversations[$array]->participants->count() > 0)
        @foreach (($conversations[$array]->participants) as $participant)
              <li><a href="users/{{$participant->id}}">{{ucwords(explode(' ', $participant->name)[0])}}</a> - ({{$messages->where('user_id', $participant->id)->where('conversation_id', $conversations[$array]->id)->count()}})</li>
        @endforeach
      @else
        <p class="no-one-warning">No one is here :(</p>
      @endif
    </ul>
</div>