<div class="container-members members{{$window}}">
    <div class="user-chat-info">Chat members</div>
    <ul>
      @foreach (($conversations[$array]->participants) as $participant)
            <li>{{ucwords(explode(' ', $participant->name)[0])}}</li>
      @endforeach
    </ul>
</div>