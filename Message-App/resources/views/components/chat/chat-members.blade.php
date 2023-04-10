<div class="mt-3 container-members members{{$window}} border-bottom" style="border-color: rgba(117,117,117,0.49) !important;">

    <div>
        <h6 class="text-center"><strong>Chat Members</strong></h6>
    </div>
    <ul>
      @if ($conversations[$array]->participants->count() > 0)
        @foreach (($conversations[$array]->participants) as $participant)
              <li><a href="users/{{$participant->id}}">{{ucwords(explode(' ', $participant->name)[0])}}</a> - ({{$messages->where('user_id', $participant->id)->where('conversation_id', $conversations[$array]->id)->count()}})</li>
        @endforeach
      @else
        <p class="">No one is here :(</p>
      @endif
    </ul>
</div>
