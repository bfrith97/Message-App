<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;
use App\Models\Conversation;

use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function show()
    {   
        $messages = Message::select()
            ->with([
                'conversation:*',
                'user:*'
            ])
            ->get();

        $users = User::select()
            ->get();

        $conversation = Conversation::select()
            ->get();

        $data = ['messages' =>$messages, 
                 'users' => $users,
                 'conversation' => $conversation
                ];

    
        return view('index', $data);
    }

    public function store(Request $request)
    {
        $content = $request->input('content');
        $id = $request->input('user');
        $conversationId = $request->input('conversation');

        
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
        $data = ['name' => $request->input('name')];
        $user = User::where('id', auth()->user()->id);

        $user->update($data);

        return redirect('/');
    }
}
