<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;
use App\Models\Conversation;
use App\Models\ConversationParticipants;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function show()
    {   
        $users = User::select()
            ->with([
                'conversations:*',
                'messages:*'
            ])
            ->get();

        $conversations = Conversation::select()
            ->with([
                'participants:*',
                'message:*'
            ])
            ->get();

        $activeConversations = Conversation::whereRelation('participants', 'user_id', '=', auth()->user()->id)->get();

        $messages = Message::select()
            ->with([
                'user:*',
            ])
            ->get();

        $data = [
                 'users' => $users,
                 'conversations' => $conversations,
                 'activeConversations' => $activeConversations,
                 'currentUser' => auth()->user()->id,
                 'messages' => $messages
                ];
    
        return view('index', $data);
    }
}
