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
        // $messages = Message::select()
        //     ->with([
        //         'conversation:*',
        //         'user:*'
        //     ])
        //     ->get();

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
            // 'messages' =>$messages, 
        $data = [
                 'users' => $users,
                 'conversations' => $conversations
                ];

    
        return view('index', $data);
    }

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

        Message::create($data);

        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $chat = Message::select();
        $chat->delete();

        return redirect('/');
    }

    public function update(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'chat_colour' => $request->input('chat_colour')
        ];
        // dd($request->input('chat_colour'));
        $user = User::where('id', auth()->user()->id);

        $user->update($data);

        return redirect('/');
    }
}
