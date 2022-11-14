<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;
use App\Models\Conversation;
use App\Models\ConversationParticipants;
use App\Models\UserBlocks;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function show()
    {   
        $users = User::select()
            ->with([
                'conversations:*',
                'messages:*',
                'userBlock:*',
            ])
            ->get();

        //retrieve conversation messages where message authors are not the same as target_user_id on userblocks
        $blockList = [];
        
        $conversations = Conversation::select()
            ->with([
                'participants:*',
                'message:*'
            ])
            ->get();

        $userBlocks = UserBlocks::select([
            'user_id',
            'target_user_id'
        ])
        ->where([
            'user_id' => auth()->user()->id
        ])
        ->get();

        // dd(auth()->user()->id);
        // dd($userBlocks);

        $activeConversations = Conversation::whereRelation('participants', 'user_id', '=', auth()->user()->id)->get();

        $messages = Message::select()
            ->with([
                'user:*',
            ])
            ->get();

        $data = [
                 'users' => $users,
                 'userBlocks' => $userBlocks,
                 'conversations' => $conversations,
                 'activeConversations' => $activeConversations,
                 'currentUser' => auth()->user()->id,
                 'messages' => $messages
                ];
    
        return view('index', $data);
    }
}
