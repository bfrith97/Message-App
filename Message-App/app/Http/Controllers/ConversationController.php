<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use App\Models\User;
use App\Models\Conversation;
use App\Models\ConversationParticipants;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConversationController extends Controller
{
    public function store(Request $request)
    {
        $conversation = Conversation::orderBy('id', 'desc')->first();
        if($conversation != null)
        {
            $conversationId = $conversation->id;
            $incrementId = $conversationId + 1;
        } else {
            $incrementId = 1;
        }


        DB::statement('ALTER TABLE conversations AUTO_INCREMENT = ' . $incrementId);
        Conversation::create();

        return redirect('/');
    }

    public function destroy(Request $request)
    {
        $conversations = Conversation::select();
        $conversations->delete();

        $messages = Message::select();
        $messages->delete();

        $conversationPartipants = ConversationParticipants::select();
        $conversationPartipants->delete();

        return redirect('/');
    }

    public function update(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
        ];
        $conversation = Conversation::where('id', $request->input('id'));

        $conversation->update($data);

        return redirect('/');
    }
}
