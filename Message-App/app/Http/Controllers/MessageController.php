<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;
use App\Models\Conversation;
use App\Models\ConversationParticipants;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $content = $request->input('content');
        $id = $request->input('user');
        $conversationId = $request->input('conversation');

        $conversationPartipants = ConversationParticipants::where('id', $conversationId);

        $participantData = [
            'user_id' => $id,
            'conversation_id' => $conversationId
        ];
        if(ConversationParticipants::select()
            ->where([
                'user_id' => $id
                ])
            ->where([
                'conversation_id' => $conversationId
            ])
            ->doesntExist()
            )
            {
                $conversationPartipants->create($participantData);
            }
        
        $data = [
            'content' => $content,
            'user_id' => $id,
            'conversation_id' => $conversationId
        ];

        if ($data['content'] == null)
            {
                return redirect('/');
            }
        Message::create($data);

        return redirect('/');
    }
    
    public function destroy(Request $request)
    {
        $chat = Message::select();
        $chat->delete();

        $conversationPartipants = ConversationParticipants::select();
        $conversationPartipants->delete();

        return redirect('/');
    }
}
