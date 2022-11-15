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
        
        $conversations = Conversation::select()
            ->with([
                'participants:*',
                'message:*'
            ])
            ->get();

        $userBlocks = UserBlocks::select([
            'target_user_id'
        ])
        ->where([
            'user_id' => auth()->user()->id
        ])
        ->get();

        $blocksArray = array_column($userBlocks->toArray(), 'target_user_id');

        $activeConversations = Conversation::whereRelation('participants', 'user_id', '=', auth()->user()->id)->get();

        $messages = Message::select()
            ->with([
                'user:*',
            ])
            ->get();

        $data = [
                 'users' => $users,
                 'userBlocks' => $userBlocks,
                 'blocksArray' => $blocksArray,
                 'conversations' => $conversations,
                 'activeConversations' => $activeConversations,
                 'currentUser' => auth()->user()->id,
                 'messages' => $messages
                ];
    
        return view('index', $data);
    }
}
