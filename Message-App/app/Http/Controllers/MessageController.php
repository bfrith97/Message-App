<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;
use App\Models\Conversation;
use App\Models\ConversationParticipants;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $content = strip_tags($request->input('message'));
        $id = $request->input('user');
        $conversationId = $request->input('conversation');

        $conversationParticipants = ConversationParticipants::where('id', $conversationId);

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
                $conversationParticipants->create($participantData);
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

        $message = Message::create($data);

        return response()->json(['success' => true]);
    }

    public function destroy(Request $request)
    {
        $chat = Message::select();
        $chat->delete();

        $conversationParticipants = ConversationParticipants::select();
        $conversationParticipants->delete();

        return redirect('/');
    }
}
